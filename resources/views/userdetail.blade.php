@extends('layouts.user')
@section('title', 'รายละเอียด')

@section('content')
    <style>
        h2 {
            text-align: center;
            /* จัดให้ข้อความอยู่ตรงกลาง */
            margin-top: 30px;
            /* ทำให้ห่างจากขอบบน 30px */
        }

        .detail-container {
            margin: auto;
            /* กำหนดให้ตำแหน่งของ detail-container อยู่ตรงกลาง */
            width: 60%;
            /* กำหนดความกว้างของ detail-container */
            border: 1px solid #ccc;
            /* เพิ่มเส้นขอบสีเทา */
            border-radius: 10px;
            /* ทำให้มีเส้นขอบโค้ง */
            padding: 20px;
            /* เพิ่มระยะห่างของเนื้อหาภายใน detail-container */
            margin-top: 20px;
            /* ทำให้ห่างจากขอบบนประมาณ 20px */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            /* เพิ่มเงา */
            font-size: 20px;
        }

        .detail-container p {
            margin-bottom: 10px;
            /* ทำให้ห่างกันระยะหนึ่งระหว่างบรรทัด */
        }

        .btn-edit {
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            width: 80px;
            height: 40px;
        }

        .btn-edit:hover {
            background-color: #E49900;
            /* Yellow background on hover */
        }
        .btn-history {
            background-color: #cc3b3b;
            border: none;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            width: 190px;
            height: 40px;
        }

        .btn-history:hover {
            background-color: #E49900;
            /* Yellow background on hover */
        }
        
        .breadcrumb {
    background-color: #ffffff; /* กำหนดสีพื้นหลังของ breadcrumb */
    padding: 10px 15px; /* กำหนดระยะห่างของขอบใน breadcrumb */
    border-radius: 4px; /* กำหนดรูปร่างของมุมใน breadcrumb */
}

.breadcrumb-item.active {
    color: #605e5e; /* กำหนดสีข้อความของ breadcrumb item ที่ active */
}
#now a {
    color: #ff0000; /* กำหนดสีข้อความของลิงก์ในข้อความที่มี ID เป็น "now" */
}
#notcolor a{
    color: #605e5e;
}

    </style>
<ol class="breadcrumb">
    <li class="breadcrumb-item" id="notcolor"><a href="{{route('admin.home')}}">หน้าแรก</a></li>
    <li class="breadcrumb-item" id="now"><a href="{{route('userdetail',['id'=>$detail->id])}}">รายละเอียด</a></li>
    <li class="breadcrumb-item active" aria-current="page">ประวัติขอใบอนุมัติ</li>
</ol>
    <h2>รายละเอียด</h2>
    <div class="detail-container">
        <p>เลขประจำตัว : {{ $detail->numberid }}</p>
        <p>ชื่อ : {{ $detail->prefix }}{{ $detail->name }} {{ $detail->lname }} </p>
        <p>ตำแหน่ง: {{ $detail->position }}</p>
        <button class="btn btn-edit" type="button" data-toggle="modal" data-target="#test">แก้ไข</button>
        {{-- <button class="btn btn-history" type="button">ประวัติการขอใบอนุมัติ</button> --}}
        <a href="{{route('historyuser',['id'=>$detail->id])}}" class="btn btn-history">ประวัติการขอใบอนุมัติ</a>
    </div>
    {{-- ส่วนmodal --}}
    <div class="modal fade" id="test" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="font-weight: bold; background-color: #127A0E; color: white;">
                    ต้องการแก้ไขข้อมูล?
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('updateuser', ['id' => $detail->id]) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="firstName" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" id="firstName" name="firstName"
                                value="{{ $detail->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="lastName" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" id="lastName" name="lastName"
                                value="{{ $detail->lname }}">
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">ตำแหน่ง</label>
                            <select class="form-select" id="position" name="position">
                                <option value="ผอ.กยท.จ.ประจวบคีรีขันธ์"
                                    {{ $detail->position == 'ผอ.กยท.จ.ประจวบคีรีขันธ์' ? 'selected' : '' }}>
                                    ผอ.กยท.จ.ประจวบคีรีขันธ์</option>
                                <option value="ผช.ผอ.จ.ประจวบคีรีขันธ์"
                                    {{ $detail->position == 'ผช.ผอ.จ.ประจวบคีรีขันธ์' ? 'selected' : '' }}>
                                    ผช.ผอ.จ.ประจวบคีรีขันธ์</option>
                                <option value="หน.ธุรการและพัสดุ"
                                    {{ $detail->position == 'หน.ธุรการและพัสดุ' ? 'selected' : '' }}>หน.ธุรการและพัสดุ
                                </option>
                                <option value="หผ.พัฒนาและฝึกอบรม"
                                    {{ $detail->position == 'หผ.พัฒนาและฝึกอบรม' ? 'selected' : '' }}>
                                    หผ.พัฒนาและฝึกอบรม</option>
                                <option value="หผ.ปฏิบัติการ" {{ $detail->position == 'หผ.ปฏิบัติการ' ? 'selected' : '' }}>
                                    หผ.ปฏิบัติการ</option>
                                <option value="นักวิชาการส่งเสริมการเกษตร"
                                    {{ $detail->position == 'นักวิชาการส่งเสริมการเกษตร' ? 'selected' : '' }}>
                                    นักวิชาการส่งเสริมการเกษตร</option>
                                <option value="นักวิชาการเกษตร"
                                    {{ $detail->position == 'นักวิชาการเกษตร' ? 'selected' : '' }}>นักวิชาการเกษตร
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">ยกเลิก</button>
                        <button type="submit" class="btn btn-success">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modalแสดงข้อความสำเร็จ-->
    <div class="modal fade" id="showupdate" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document"
            style="display: flex; align-items: center; min-height: calc(100vh - 20px);">
            <div class="modal-content">
                <br>
                <div class="modal-body">
                    <center>
                        <img src="{{ asset('images/success.png') }}" alt="Success Image" width="50ox" height="50px">
                    </center>
                    <p>
                        <center>ข้อมูลอัพเดตแล้ว</center>
                    </p>
                </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        @if (session('success'))
            // แสดง Modal หลังจาก 500 มิลลิวินาที
            setTimeout(function() {
                $('#showupdate').modal('show');

                // ตั้งเวลาให้ปิด Modal หลังจาก 2000 มิลลิวินาที (2 วินาที) หลังจากที่แสดง
                setTimeout(function() {
                    $('#showupdate').modal('hide');

                    // รีเฟรชหน้าเว็บหลังจากปิด Modal อีก 500 มิลลิวินาที
                    setTimeout(function() {
                        location.reload();
                    }, 500);
                }, 2000);
            }, 500);
        @endif
    </script>
@endsection
