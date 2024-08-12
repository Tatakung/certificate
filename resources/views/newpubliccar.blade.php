<!DOCTYPE html>
<html lang="th">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>แบบฟอร์มการปฏิบัติราชการ</title>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        
        @page {
            size: A4;
            margin-top: 100px;
            margin-left: 60px;
            margin-right: 60px;
        }
        
        body {
            font-family: "THSarabunNew";
            font-size: 16px;
            line-height: 1.5;
        }

        .dotted-line {
            border-bottom: 1px dotted #000;
            display: inline-block;
            width: 100px; /* Adjust width as needed */
        }

        .content-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .content-line > span {
            margin: 0 5px; /* Adjust spacing */
        }
    </style>
</head>
<body>
    <p><span style="margin-left: 55px;">ไปปฏิบัติราชการที่</span> 
        @foreach ($work_location as $location)
            {{$location->location}}
        @endforeach
    </p>
    <p>เพื่อปฏิบัติงาน เข้าร่วมประชุมผู้บริหาร 
        @foreach ($work_task as $task)
            {{$task->task}}
        @endforeach 
        ตามหนังสือเลขที่ กษ 29009/0012 ลว. 1 ก.ค.67
    </p>

    <div class="content-line">
        <span class="dotted-line" style="width: 300px;"></span>
        <span>จำนวนผู้ปฏิบัติงาน</span>
        <span>1</span>
        <span>คน</span>
    </div>

    <div class="content-line">
        <span>ในวันที่</span>
        <span class="dotted-line" style="width: 150px;"></span>
        <span>ออกเดินทางเวลา</span>
        <span class="dotted-line" style="width: 100px;"></span>
        <span>น. และกลับถึงสำนักงานประมาณเวลา</span>
        <span class="dotted-line" style="width: 100px;"></span>
        <span>น.</span>
    </div>
</body>
</html>
