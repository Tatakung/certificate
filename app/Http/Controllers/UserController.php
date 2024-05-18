<?php

namespace App\Http\Controllers;

use App\Models\TravelApproval;
use App\Models\TravelApprovalDetail;
use App\Models\User;
use App\Models\WorkAssignment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    //
    public function showform()
    {
        $users = User::select('id', 'prefix', 'name', 'lname', 'position', 'is_admin')->get();  // ดึงข้อมูล id และ name จาก users
        return view('formcer', compact('users'));
    }


    public function savedata(Request $request)
    {
        // $request->validate([
        //     'vacation_start_date' => 'nullable',
        //     'vacation_end_date' => 'nullable'
        // ]);
        $travelApproval = TravelApproval::create([
            'employee_id' => auth()->user()->id,
            'at' => $request->at,
            'name' => $request->name,
            'prefix' => $request->prefix,
            'lname' => $request->lname,
            'position' => $request->position,
            'level' => $request->level,
            'department' => $request->department,
            'faculty_count' => $request->faculty_count,
            'numberid' => auth()->user()->numberid,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'transport' => $request->transport,
            'vehicle_number' => $request->vehicle_number,
            'vacation_start_date' => $request->vacation_start_date,
            'vacation_end_date' => $request->vacation_end_date,
            'budget_reference' => $request->budget_reference,
            'action_plan' => $request->action_plan,
            'activity' => $request->activity,
        ]);

        // // สร้างเรคอร์ดในตาราง TravelApprovalDetail
        $facultyCount = (int) $request->faculty_count;
        for ($i = 1; $i <= $facultyCount; $i++) {
            $facultyName = $request->input('name_' . $i);
            $user = User::find($facultyName); // ค้นหาผู้ใช้จาก id ที่เลือก
            $facultyMemberName = $user->prefix . '' . $user->name . ' ' . $user->lname; // สร้างชื่อผู้ใช้แบบเต็มรูปแบบ

            $facultyPosition = $request->input('position_' . $i);
            $facultyNote = $request->input('note_' . $i);
            TravelApprovalDetail::create([
                'travel_approval_id' => $travelApproval->id,
                'faculty_member_name' => $facultyMemberName,
                'faculty_member_position' => $facultyPosition,
                'faculty_note' => $facultyNote,

            ]);
        }


        // สร้างเรคอร์ดในตาราง WorkAssignment
        $dateFields = $request->only(['date', 'location', 'task']);
        foreach ($dateFields['date'] as $key => $date) {
            $dateValue = date('Y-m-d', strtotime($date)); // แปลงรูปแบบวันที่
            $location = $dateFields['location'][$key];
            $task = $dateFields['task'][$key];

            WorkAssignment::create([
                'travel_approval_id' => $travelApproval->id,
                'date' => $dateValue,
                'location' => $location,
                'task' => $task,
            ]);
        }
        // return redirect()->route('detail',['id'=> $travelApproval->id]) ; 
        return redirect()->route('detail', ['id' => $travelApproval->id])->with('success', 'สำเร็จแล้ว');

    }



    public function homepage()
    {
        // ดึงข้อมูลของผู้ใช้ที่กำลังเข้าสู่ระบบ
        $user = User::find(auth()->user()->id);

        // ค้นหาข้อมูลการขออนุมัติเดินทางของผู้ใช้ที่กำลังเข้าสู่ระบบ
        $data = TravelApproval::where('employee_id', $user->id)
            ->select('id', 'created_at', 'faculty_count')
            ->get();

        return view('homepage', compact('data'));
    }

    public function detail($id)
    {
        $travelApproval = TravelApproval::find($id);
        $workassignment = WorkAssignment::where('travel_approval_id', $travelApproval->id)->get();
        $travelapprovaldetail = TravelApprovalDetail::where('travel_approval_id', $travelApproval->id)->get();
        return view('detail', compact('travelApproval', 'workassignment', 'travelapprovaldetail'));
    }



    public function printpdf($id)
    {
        $travelapproval = TravelApproval::find($id);
        $travelapprovaldetail = TravelApprovalDetail::where('travel_approval_id', $id)->get();
        $workassignment = WorkAssignment::where('travel_approval_id', $id)->get();
        $thaiDate = Carbon::now()->locale('th')->isoFormat('LL');
        $thaiYear = (int)Carbon::now()->addYears(543)->format('Y');
        $thaiDateWithYear = str_replace((string)Carbon::now()->year, (string)$thaiYear, $thaiDate);
        $pdfs = PDF::loadview('pdfview', compact('travelapproval', 'travelapprovaldetail', 'workassignment', 'thaiDateWithYear'));
        return $pdfs->stream();
    }
}
