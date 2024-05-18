
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>แบบขออนุมัติเดินทางไปปฏิบัติงาน</title>

    {{-- <meta http-equiv="Content-Language" content="th" /> --}}

    <!-- Bootstrap 3.x only : DOMPDF support float, not flexbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!-- thai font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Sarabun" rel="stylesheet" /> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>


    {{-- ฟ้อนไทยนะ --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">










    <style>
        /* กำหนดขนาดของหน้าเอกสารเป็น A4 */
        @page {
            size: A4;
            margin: 0;
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            /* src: url("{{asset('fonts/THSarabunNew.ttf')}}") format('truetype') ;  */
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');

        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            /* src: url("{{asset('fonts/THSarabunNew Bold.ttf')}}") format('truetype') ;  */
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            /* src: url("{{asset('fonts/THSarabunNew Italic.ttf')}}") format('truetype') ;  */
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');

        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            /* src: url("{{asset('fonts/THSarabunNew BoldItalic.ttf')}}") format('truetype') ;  */
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');

        }


        
        /* กำหนดขนาดของเนื้อหาให้เต็มหน้ากระดาษ A4 */
        html,
        body {
            /* width: 210mm;
            height: 297mm; */
            /* margin: 0;
            padding: 0; */
            /* font-weight: 100; */
            font-style: normal;
            font-weight: bold;

            /* font-family: "Sarabun", !important; */
            font-family: "THSarabunNew" ; 
            /* font-size: 16px;  */
        }


        table {
            border-collapse: collapse;
             font-size: 18px ; 
             line-height: 10px; 
             overflow: hidden; 
             white-space: nowrap;     
        }

        td,
        {
        border: 1px solid;
        font-size: 18px; 
        line-height: 10px; 
        overflow: hidden; 
        white-space: nowrap; 
        text-overflow: ellipsis; /* เพิ่มไว้สำหรับตัดข้อความที่เกินความกว้างของเซลล์ */
        }


       

        /* สร้างกรอบดำ */
        .black-border {
            position: absolute;
            top: 8mm;
            left: 8mm;
            right: 8mm;
            bottom: 8mm;
            width: calc(100% - 40mm);
            height: calc(100% - 40mm);
            border: 1px solid #000000;
            box-sizing: border-box;
            padding: 10mm;

        }
          /* สร้างกรอบดำ */
          .black-border-two {
            position: absolute;
            top: 8mm;
            left: 8mm;
            right: 8mm;
            bottom: 8mm;
            width: calc(100% - 40mm);
            height: calc(100% - 40mm);
            border: 1px solid #000000;
            box-sizing: border-box;
            padding: 10mm;

        }

        

        .left-frame {
            position: absolute;
            top: 726px;
            left: 0;
            width: 45%;
            height: 297px;
            border-right: 1px solid #000000;
            box-sizing: border-box;
            padding: 5mm;
        }

        .right-frame {
            position: absolute;
            top: 750px;
            right: 0;
            width: 45%;
            height: 72mm;
            box-sizing: border-box;
            padding: 5mm;
        }



        .black-border::before {
            content: "";
            position: absolute;
            top: 726px;
            left: 0;
            right: 0;
            height: 1px;
            background-color: #000000;
        }

        .header-a {
            
            margin-top: -1.25cm;
            text-align: center;
            font-size: 23px;
            font-weight: bold;
        }

       

        .da {
            text-align: right;
            padding-right: 80px;
            margin-top: -20px ; 
            font-size: 18px ; 
        }

        .for {
            text-align: left;
            margin-top: -0.7cm;
            font-size: 18px; 
        }

        .s {
            padding-left: 36px;
            margin-top: -49px;
            font-size: 18px; 
        }

        .asd2 {
            margin-top: -10px;
        }
        .asd1 {
            margin-top: -10px;
        }
        .employee-info {
            margin-top: -57px;
            white-space: pre-line;
            font-size: 18px; 
        }
        .datefordate{
            margin-top: -20px;
            font-size: 18px; 
        }

        .work{
            /* text-align: left; */
            /* padding-left: 36px; */
            margin-top: -9px;
            font-size: 18px; 
        }


        th,
         {
            /* font-family: 'Sarabun' !important; */
            text-align: center;
            border: 1px solid #000000;
        }
  
        .sheet-one {
            margin-top: 3px;
            margin-left: -4px;
            font-size: 18px; 

}
        
        .zxz {
            margin-top: -15px ; 
            text-align: left;
            padding-left: 50px;
            font-size: 18px ; 
        }
        .pp {
            text-align: right;
            margin-right: 1px ; 
            margin-top: -6px  ; 
            font-size: 18px;
        }
        .sign{
            margin-left: 10.7cm  ; 
            margin-top: -16px;
            position: fixed;
            font-size: 18px;
        }
        .budget{
            margin-top: -20px;
            font-size: 18px ; 
        }
        .left-a{
            font-size: 18px ; 
            text-align: center;
            margin-top: -20px;
        }
        .right-a{
            font-size: 18px ; 
            text-align: center;
            margin-top: -47px;
        }
 
        .right-bracket{
            text-align: center;
            margin-top: -26px;
            font-size: 18px ; 
        }
        .right-line-a{
            margin-top: -26px;
            font-size: 18px;
            text-align: center;
        }
        .right-line-as{
            margin-top: -26px;
            font-size: 18px;
            text-align: center;
        }
        .right-line-ab{
            margin-top: -26px;
            font-size: 18px;
            text-align: center;
        }
        .right-line-b{
            margin-top: -10px;
            font-size: 18px;
            text-align: center ; 
        }
        .right-line-c{
            margin-top: -26px;
            font-size: 18px ;
            text-align: center ;  
        }
        .right-line-d{
            margin-top: -26px;
            font-size: 18px ; 
            text-align: center ; 
        }
        .right-line-e{
            text-align: center;
            font-size: 18px ; 
            margin-top: -26px;

        }
        .left-line-a{
            margin-top: -14px;
            font-size: 18px;
            text-align: center ; 
        }
        .left-line-b{
            /* text-align: center; */
            margin-top: -26px;
            margin-left: 1.93cm ; 
            font-size: 18px;
        
        }
        .left-bracket{
            text-align: center;
            margin-top: -26px;
            font-size: 18px;
        }
        .left-line-c{
            text-align: center;
            margin-top: -26px;
            font-size: 18px;
        }
        .left-line-d{
            margin-top: -26px;
            font-size: 18px;
            text-align: center ; 
        }
        .left-line-e{
            /* text-align: center; */
            margin-top: -26px;
            margin-left: 1.93cm ; 
            font-size: 18px;
        }
        .left-bracket-a{
            text-align: center;
            margin-top: -26px;
            font-size: 18px;
        }
        .left-line-f{
            text-align: center;
            margin-top: -26px;
            font-size: 18px;
        }
        .left-line-g{
            margin-top: -26px;
            font-size: 18px;
            text-align: center ; 
        }
        


        .left-line-h{
            /* text-align: center; */
            margin-top: -26px;
            margin-left: 1.93cm ; 
            font-size: 18px ; 
        }
        .left-bracket-i{
            text-align: center;
            margin-top: -26px;
            font-size: 18px;
        }
        .left-line-j{
            text-align: center;
            margin-top: -26px;
            font-size: 18px;
        }
        .black-box {
            width: 0.3em;
            height: 0.3em;
            background-color: rgb(0, 0, 0);
            padding: 0.3em;
            border: 2px solid rgb(0, 0, 0); 
        }
        .white-box {
            width: 0.3em;
            height: 0.3em;
            background-color: rgb(255, 255, 255);
            padding: 0.3em;
            border: 2px solid rgb(0, 0, 0); 
        }
        .two-header {
            margin-top: -10px;
            text-align: center;
            font-size: 23px;
            font-weight: bold ; 
        }
        .two-point-a{
            text-align: right;
            margin-top: 25px; 
            font-size: 18px ; 
        }
        .two-point-b{
            margin-left: 11.6cm ; 
            margin-top: -20px; 
            position: fixed;
            font-size: 18px ; 
        }
        .two-point-c{
            position: fixed;
            text-align: right;
            margin-left: 11.1cm ; 
            margin-top: 10px; 
            font-size: 18px ; 
        }
        .two-point-d{
            position: fixed;
            text-align: right;
            margin-left: 11.1cm ; 
            margin-top: 41px; 
            font-size: 18px ; 
        }
        .footer-onet{
            text-align: right;
            margin-top: 28.7cm ; 
            margin-right: 32px ; 
            font-size: 12px;
            
        }
        #carother{
            margin-top: 10px ; 
        }
        .ipemployeename{
        margin-left: 3.1cm;
    }
    .employee-at {
            position: fixed;
            top: 2.29cm; 
            left: 3.2cm; 
            font-size: 18px ; 
        }
        .employee-name {
            position: fixed;
            top: 2.99cm; 
            left: 4.2cm; 
            font-size: 18px ; 
        }
        .employee-position{
            position: fixed;
            top: 2.99cm; 
            left: 11.1cm;  
            font-size: 18px ; 
        }
        .employee-level{
            position: fixed;
            top: 3cm; 
            right:2.4cm; 
            font-size: 18px ;
        }
        .employee-department{
            position: fixed;
            top: 3.72cm; 
            left: 3cm; 
            font-size: 18px;
        }
        .employee-faculty_count{
            position: fixed;
            top: 3.72cm;
            left: 12.1cm; 
            font-size: 18px;

        }
        .travelapproval-start_date{
            position: fixed;
            top: 4.49cm; 
            left: 4.2cm; 
            font-size: 18px ; 
        }.travelapproval-end_date{
            position: fixed;
            top: 4.49cm; 
            left: 10.65cm; 
            font-size: 18px ;
        }
        /* .carregistration-2{
            position: fixed;
            top: 14.87cm; 
            left: 10.65cm; 
        }
        .carregistration-1{
            position: fixed;
            top: 14.60cm; 
            left: 10.65cm; 
        } */
        .travelapproval-vehicle_number{
            position: fixed;
            top: 15.18cm; 
            left: 14.65cm;   
        }
        .dash{
            position: fixed;
            top: 15.1cm; 
            left: 14.65cm;   
        }
        .travelapproval-vacation_start_date{
            position: fixed;
            top: 15.9cm; 
            left: 6cm;   
        }
        .travelapproval-vacation_end_date{
            position: fixed;
            top: 15.9cm; 
            left: 9.59cm;     
        }

        .travelapproval-day{
            position: fixed;
            top: 15.9cm; 
            left: 16.5cm;     
        }


        .travelapproval-vacation_start_date-vacation_end_date-dash-1{
            position: fixed;
            top: 15.91cm; 
            left: 10cm;   
        }
        .travelapproval-vacation_start_date-vacation_end_date-dash-2{
            position: fixed;
            top: 15.91cm; 
            left: 17cm;   
        }
        .travelapproval-budget_reference{
            position: fixed;
            top: 16.84cm; 
            left: 6.20cm;  
            font-size: 14px ;   
            color: #ee0b0b ;   
        }
        .travelapproval-action_plan{
            position: fixed;
            top: 16.84cm; 
            left: 9.10cm;    
            font-size: 14px ; 
            color: #ee0b0b ; 
        }
        .travelapproval-activity{
            position: fixed;
            top: 16.84cm; 
            left: 16.82cm;    
            font-size: 14px ;   
            color: #ee0b0b ;    
        }
        .two-point-b-employee-name{
            position: fixed;
            top: 23.59cm; 
            left: 13.9cm;  
            font-size: 18px;  
        }
        .two-point-b-employee-position{
            position: fixed;
            top: 24.41cm; 
            left: 14.4cm;    
            font-size: 18px ; 
        }
        .na-date{
            position: fixed;
            top: 25.21cm; 
            left: 14.4cm;    
            font-size: 18px ; 
        }
        .Receipt-number{
            position: fixed;
            top: 0.79cm; 
            right:1.9cm;    
            font-size: 18px ;      
        }
        .date-j{
            position: fixed;
            top: 2.0cm; 
            left: 13.00cm;         
            font-size: 18px ; 
        }
        #circlecar, #circlebike {
        position: relative;
        top: 5px;
    }
    </style>    
</head>

<body>

    <!-- หน้าที่หนึ่ง -->
    <div class="black-border">

        <div class="header-a">
            <p>แบบขออนุมัติเดินทางไปปฏิบัติงาน</p>
        </div>

        {{-- <div>
            <p>เลขรับที่.................../................</p>
        </div> --}}
      
        <div class="da">
            <p>{{$thaiDateWithYear}}</p>
        </div>

        <span class="Receipt-number">เลขรับที่........../...........</span>

        <span class="date-j">วันที่....................................................................</span>

        <div class="for">
            <p>เรียน.........................................................................</p>
        </div>


        <div class="s">
            <p>ข้าพเจ้า...................................................................ตำแหน่ง...................................................................................ระดับ..............</p>
        </div>
        <span class="employee-at">{{ $travelapproval->at }}</span>
        {{-- <span class="employee-name">{{ $employee->name }}</span> --}}
        <span class="employee-name">{{ $travelapproval->prefix}}{{ $travelapproval->name}} {{ $travelapproval->lname}}</span>

        <span class="employee-position">{{ $travelapproval->position }}</span>
        <span class="employee-level">{{ $travelapproval->level }}</span>



        <p class="employee-info">
            สังกัด........................................................................................พร้อมด้วยคณะ...............คน &nbsp;&nbsp;&nbsp;&nbsp;ขออนุมัติเดินทางไปปฏิบัติงานระหว่าง
        </p>

        <span class="employee-department">{{ $travelapproval->department }}</span>
        <span class="employee-faculty_count">{{ $travelapproval->faculty_count }}</span>


        <div class="datefordate">
            วันที่....................................................................ถึงวันที่....................................................................ดังนี้
        </div>
        
        <?php
        $startDate = $travelapproval->start_date;
        $endDate = $travelapproval->end_date;

        // แปลงเป็นรูปแบบวันที่และปีไทย
        $thaiStartDate = \Carbon\Carbon::parse($startDate)->locale('th')->isoFormat('LL');
        $thaiEndDate = \Carbon\Carbon::parse($endDate)->locale('th')->isoFormat('LL');

        // แปลงปีเป็นปีพุทธศักราช
        $thaiStartYear = (int)\Carbon\Carbon::parse($startDate)->addYears(543)->format('Y');
        $thaiEndYear = (int)\Carbon\Carbon::parse($endDate)->addYears(543)->format('Y');

        // เปลี่ยนปีในวันที่เป็นปีพุทธศักราช
        $thaiStartDateWithYear = str_replace((string)\Carbon\Carbon::parse($startDate)->year, (string)$thaiStartYear, $thaiStartDate);
        $thaiEndDateWithYear = str_replace((string)\Carbon\Carbon::parse($endDate)->year, (string)$thaiEndYear, $thaiEndDate);
    ?>
    
        <span class="travelapproval-start_date">{{$thaiStartDateWithYear}}</span>
        <span class="travelapproval-end_date">{{$thaiEndDateWithYear}}</span>


        <div class="work">
            1. งานที่ปฏิบัติตามรายการโดยสังเขปต่อไปนี้
        </div>

        
        <table>
            <tr>
                <td style="height: 25px; width: 130px; font-weight: bold; text-align: center; border-color: #000000;">วัน เดือน ปี </td>
                <td style="width: 200px; font-weight: bold; text-align: center; border-color: #000000;">ท้องที่หรือสถานที่ปฏิบัติงาน</td>
                <td style="width: 320px; font-weight: bold; text-align: center; border-color: #000000;">งานที่ปฏิบัติ</td>
            </tr>
            @foreach ($workassignment as $show)
                <tr>
                    <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;">
                        <?php
                        $thaiDate = \Carbon\Carbon::parse($show->date)
                            ->locale('th')
                            ->isoFormat('LL');
                        $thaiYear = (int) \Carbon\Carbon::parse($show->date)
                            ->addYears(543)
                            ->format('Y');
                        $thaiDateWithYear = str_replace((string) \Carbon\Carbon::parse($show->date)->year, (string) $thaiYear, $thaiDate);
                        ?>
                        {{ $thaiDateWithYear }}
                    </td>
                    <td style="height: 25px; width: 200px; text-align: center; border-color: #000000;">{{ $show->location }}</td>
                    <td style="height: 25px; width: 320px;  border-color: #000000;">{{ $show->task }}</td>
                </tr>
            @endforeach
            @php
                $row_count = count($workassignment);
                $remaining_rows = 12 - $row_count;
            @endphp
    
            @if ($travelapproval->transport !== 'รถยนต์' && $travelapproval->transport !== 'รถจักรยานยนต์')
                @for ($i = 0; $i < $remaining_rows - 1; $i++)
                    <tr>
                        <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;"></td>
                        <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;"></td>
                        <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;"></td>
                    </tr>
                @endfor
                <tr>
                    <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;"></td>
                    <td style="height: 25px; width: 130px;border-color: #000000;">หมายเหตุ: {{ $travelapproval->transport }}
                    </td>
                    <td style="height: 25px; width: 130px;border-color: #000000;"> ทะเบียน
                        {{ $travelapproval->vehicle_number }}
                    </td>
                </tr>
            @else
                @for ($i = 0; $i < $remaining_rows; $i++)
                    <tr>
                        <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;"></td>
                        <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;"></td>
                        <td style="height: 25px; width: 130px; text-align: center; border-color: #000000;"></td>
                    </tr>
                @endfor
            @endif
        </table>
    



        <div style="font-size: 18px ; ">
            2. ขอใช้พาหนะส่วนตัว
            @if ($travelapproval->transport === 'รถยนต์' || $travelapproval->transport === 'รถจักรยานยนต์')
                <input type="radio" id="circlecar" name="vehicle" value="car"
                    @if ($travelapproval->transport === 'รถยนต์') checked @endif readonly disabled> รถยนต์
                
                <input type="radio" id="circlebike" name="vehicle" value="bike"
                    @if ($travelapproval->transport === 'รถจักรยานยนต์') checked @endif readonly disabled> รถจักรยานยนต์
    
                {{-- หมายเลขทะเบียน {{ $travelapproval->vehicle_number }} --}}
                <span style="margin-left: 60px;">หมายเลขทะเบียน..........................................................................</</span>

                {{-- <p class="carregistration-1">หมายเลขทะเบียน123..................................................................</p> --}}
                <span class="travelapproval-vehicle_number">{{ $travelapproval->vehicle_number }}</span>
            @else
                <input type="radio" id="circlecar" name="vehicle" value="car" readonly disabled> รถยนต์
                <input type="radio" id="circlebike" name="vehicle" value="bike" readonly disabled>รถจักรยานยนต์
                {{-- หมายเลขทะเบียน --}}
                {{-- <p class="carregistration-2">หมายเลขทะเบียน..................................................................</p> --}}
                <span style="margin-left: 60px;">หมายเลขทะเบียน..........................................................................</</span>
                <span class="dash">-</span>
            @endif
        </div>


        {{-- <span class="dash">-</span> --}}

 
       
            @if ($travelapproval->vacation_start_date !== null && $travelapproval->vacation_end_date !== null)
            <div class="asd1" style="font-size: 18px;">
                <p>3. ขอพักแรมในวันที่........................................................................................................................รวม................................................วัน</p>
                <span class="travelapproval-vacation_start_date">
                    {{-- แปลงเป็นรูปแบบวันที่และปีไทย --}}
                    <?php
                        $thaiStartDate = \Carbon\Carbon::parse($travelapproval->vacation_start_date)->locale('th')->isoFormat('LL');
                        $thaiStartYear = (int)\Carbon\Carbon::parse($travelapproval->vacation_start_date)->addYears(543)->format('Y');
                        $thaiStartDateWithYear = str_replace((string)\Carbon\Carbon::parse($travelapproval->vacation_start_date)->year, (string)$thaiStartYear, $thaiStartDate);
                    ?>
                    {{ $thaiStartDateWithYear }}
                    ถึงวันที่
                </span>
                
                <span class="travelapproval-vacation_end_date">
                    {{-- แปลงเป็นรูปแบบวันที่และปีไทย --}}
                    <?php
                        $thaiEndDate = \Carbon\Carbon::parse($travelapproval->vacation_end_date)->locale('th')->isoFormat('LL');
                        $thaiEndYear = (int)\Carbon\Carbon::parse($travelapproval->vacation_end_date)->addYears(543)->format('Y');
                        $thaiEndDateWithYear = str_replace((string)\Carbon\Carbon::parse($travelapproval->vacation_end_date)->year, (string)$thaiEndYear, $thaiEndDate);
                    ?>
                    {{ $thaiEndDateWithYear }}
                </span>

                <span class="travelapproval-day">
                    <?php
                    $start_date = \Carbon\Carbon::parse($travelapproval->vacation_start_date);
                    $end_date = \Carbon\Carbon::parse($travelapproval->vacation_end_date)->addDays(1);
                    $days = $end_date->diffInDays($start_date);
                    ?>
                    {{$days}}
                </span>
                


            </div>    
             @elseif($travelapproval->vacation_start_date === null && $travelapproval->vacation_end_date === null)
             <div style="font-size: 18px ; "class="asd2">
                <p>3. ขอพักแรมในวันที่........................................................................................................................รวม................................................วัน</p>
                <span class="travelapproval-vacation_start_date-vacation_end_date-dash-1">-</span>
                <span class="travelapproval-vacation_start_date-vacation_end_date-dash-2">-</span>
            </div>    
            @endif

        
        <div class="budget">
            <p>4. งบประมาณใช้จ่ายจากมาตรา............แผนปฏิบัติงาน...................................................................................กิจกรรม.............................</p>
        </div>

        <span class="travelapproval-budget_reference">{{ $travelapproval->budget_reference }}</span>
        <span class="travelapproval-action_plan">{{ $travelapproval->action_plan }}</span>
        <span class="travelapproval-activity">{{ $travelapproval->activity }}</span>



        <div class="zxz">
            จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ
        </div>

        <div class="pp">
            ลงชื่อ..................................................เลขประจำตัว......................
        </div>

        <div class="sign">
            ({{ $travelapproval->prefix}}{{ $travelapproval->name}} {{ $travelapproval->lname}})

        </div>

        <!-- กรอบฝั่งซ้าย -->
        <div class="side-frame left-frame">
            <div class="left-a">
                <p>ความเห็นผู้บังคับบัญชา</p>
            </div>

            <div class="left-line-a">
                <p>.............................................................................................</p>
            </div>

            <div class="left-line-b">
                <p>ลงชื่อ......................................../............/............</p>
            </div>

            <div class="left-bracket">
                <p>(......................................................)</p>
            </div>

            <div class="left-line-c">
                <p>ตำแหน่ง..........................................</p>
            </div>

            <div class="left-line-d">
                <p>.............................................................................................</p>
            </div>


            <div class="left-line-e">
                <p>ลงชื่อ......................................../............/............</p>
            </div>

            <div class="left-bracket-a">
                <p>(......................................................)</p>
            </div>

            <div class="left-line-f">
                <p>ตำแหน่ง..........................................</p>
            </div>

            <div class="left-line-g">
                <p>.............................................................................................</p>
            </div>



            <div class="left-line-h">
                <p>ลงชื่อ......................................../............/............</p>
            </div>

            <div class="left-bracket-i">
                <p>(......................................................)</p>
            </div>

            <div class="left-line-j">
                <p>ตำแหน่ง..........................................</p>
            </div>

        </div>

        <!-- กรอบฝั่งขวา -->
        <div class="side-frame right-frame">
            <div class="right-a">
                <p>คำสั่งผู้อนุมัติ</p>
            </div>

            <div class="right-line-a">
                <p>.............................................................................................
                </p>
            </div>
            <div class="right-line-as">
                <p>.............................................................................................
                </p>
            </div> <div class="right-line-ab">
                <p>.............................................................................................
                </p>
            </div>


            

            <div class="right-line-b">
                <p>ลงชื่อ....................................................................................</p>
            </div>

            <div class="right-bracket">
                <p>(......................................................................)</p>
            </div>

            <div class="right-line-c">
                <p>ตำแหน่ง................................................................................</p>
            </div>

            <div class="right-line-d">
                <p>.............................................................................................</p>
            </div>

            <div class="right-line-e">
                <p>............../............../..............</p>
            </div>
        </div>
    </div>

    <div class="footer-onet">
        <p>
            กยท.-ฝกค.-กตจ./2599-01
        </p>
    </div>
    



    <!-- หน้าที่สอง -->
    <div style="page-break-before: always;"></div> <!-- ใช้สร้างหน้าใหม่ -->
    <div class="black-border-two">
        <div class="two-header">
            <p>บัญชีรายชื่อผู้เดินทางไปปฏิบัติงานเป็นหมู่คณะ</p>
        </div>



        <table border="1">
            <thead>
                <tr>
                    <th style="width: 100px; height: 40px;">ลำดับที่</th>
                    <th style="width: 250px;">ชื่อ-สกุล</th>
                    <th style="width: 150px;">ตำแหน่ง/ระดับ</th>
                    <th style="width: 150px;">หมายเหตุ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($travelapprovaldetail as $show)
                <tr>
                    <td style="height: 37px; text-align: center;">{{$loop->index + 1}}</td>
                    <td style="text-align: center;">{{$show->faculty_member_name}}</td>
                    <td style="text-align: center;">{{$show->faculty_member_position}}</td>
                    <td style="text-align: center;">
                        @if($show->faculty_note === "ไม่มี")
                            {{-- ถ้าเท่ากับ "ไม่มี" ให้แสดงค่าว่าง --}}
                        @else
                            {{ $show->faculty_note }}
                        @endif
                    </td>                </tr>
                @endforeach
                @for ($i = count($travelapprovaldetail); $i < 18; $i++)
                <tr>
                    <td style="height: 37px; text-align: center;"></td>
                    <td style="height: 37px; "></td>
                    <td style="height: 37px;"></td>
                    <td style="height: 37px;"></td>
                </tr>
                @endfor
            </tbody>
        </table>
        

        <div class="two-point-a">
            <p>ลงชื่อ....................................หัวหน้าคณะเดินทาง</p>
        </div>

        <div class="two-point-b">
            <p>(....................................................)</p>
        </div>

        <span class="two-point-b-employee-name">{{ $travelapproval->prefix}}{{ $travelapproval->name}} {{ $travelapproval->lname}}</span>

        <div class="two-point-c">
            <p>ตำแหน่ง...................................................</p>
        </div>

        <span class="two-point-b-employee-position">{{ $travelapproval->position }}</span>
        <span class="na-date">{{$thaiDateWithYear}}</span>



        <div class="two-point-d">
            <p>วันที่...........................................................</p>
        </div>

        <div>
            <p>้</p>
        </div>


    </div>
    
</body>
</html>
