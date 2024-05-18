@extends('layouts.user')
@section('title', 'เพิ่มรายชื่อพนักงาน')
@section('content')
<style>
    h2 {
            text-align: center;
            margin-top: 30px;
        }

        .detail-link {
            color: #127A0E;
            text-decoration: none;
            transition: color 0.3s;
        }

        .detail-link:hover {
            color: #E49900;
        }

        .form-container {
            margin: auto;
            /* กำหนดให้ตำแหน่งของ form-container อยู่ตรงกลาง */
            width: 75%;
            /* กำหนดความกว้างของ form-container */
            border: 1px solid #f5f5f5;
            /* เพิ่มเส้นขอบสีเทา */
            border-radius: 10px;
            /* ทำให้มีเส้นขอบโค้ง */
            padding: 20px;
            /* เพิ่มระยะห่างของเนื้อหาภายใน form-container */
            margin-top: 20px;
            /* ทำให้ห่างจากขอบบนประมาณ 20px */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            /* เพิ่มเงา */
            font-size: 20px;
            /* กำหนดขนาดตัวอักษร */
        }

        .alert-info {
            background-color: #d6e9c6;
            border-color: #c6e68a;
            color: #3c763d;
            margin: auto;
            /* กำหนดให้ตำแหน่งของ form-container อยู่ตรงกลาง */
            width: 75%;
            /* กำหนดความกว้างของ form-container */
            border: 1px solid #f5f5f5;
            /* เพิ่มเส้นขอบสีเทา */
            border-radius: 10px;
            /* ทำให้มีเส้นขอบโค้ง */
            padding: 20px;
            /* เพิ่มระยะห่างของเนื้อหาภายใน form-container */
            margin-top: 20px;
            /* ทำให้ห่างจากขอบบนประมาณ 20px */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            /* เพิ่มเงา */
            font-size: 20px;
            /* กำหนดขนาดตัวอักษร */
        }

        .btn-create {
            background-color: #4CAF50;
            border: none;
            color: white;
            /* padding: 15px 32px; */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            width: 80px;
            height: 45px;
        }

        .btn-create:hover {
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
    <li class="breadcrumb-item" id="now"><a href="">เพิ่มรายชื่อพนักงาน</a></li>
</ol>
<h2>เพิ่มรายชื่อพนักงาน</h2>
<div class="form-container">
    <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="container">
        <div class="row">


        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="prefix" class="form-label">คำนำหน้า</label>
                <select class="form-select" id="prefix" name="prefix" required>
                    <option value="" disabled selected>กรุณาเลือกรายการ</option>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                    <option value="นาง">นาง</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ"
                    required>
            </div>
            <div class="col-md-4">
                <label for="lname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="นามสกุล"
                    required>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <label for="numberid" class="form-label">รหัสประจำตัวพนักงาน</label>
                <input type="number" class="form-control" id="numberid" name="numberid"
                    placeholder="กรอกรหัสประจำตัวพนักงาน" required>
            </div>
            <div class="col-md-4">
                <label for="position" class="form-label">ตำแหน่ง</label>
                <select class="form-select" id="position" name="position" required>
                    <option value="" disabled selected>กรุณาเลือกรายการ</option>
                    <option value="ผอ.กยท.จ.ประจวบคีรีขันธ์"> ผอ.กยท.จ.ประจวบคีรีขันธ์ </option>
                    <option value="ผช.ผอ.จ.ประจวบคีรีขันธ์">ผช.ผอ.จ.ประจวบคีรีขันธ์</option>
                    <option value="หน.ธุรการและพัสดุ">หน.ธุรการและพัสดุ</option>
                    <option value="หผ.พัฒนาและฝึกอบรม">หผ.พัฒนาและฝึกอบรม</option>
                    <option value="หผ.ปฏิบัติการ">หผ.ปฏิบัติการ</option>
                    <option value="นักวิชาการส่งเสริมการเกษตร">นักวิชาการส่งเสริมการเกษตร</option>
                    <option value="นักวิชาการเกษตร">นักวิชาการเกษตร</option>
                    <option value="นักวิเคราห์นโยบายและแผน">นักวิเคราห์นโยบายและแผน</option>
                    <option value="นักวิชาการเงินและบัญชี">นักวิชาการเงินและบัญชี</option>

                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                {{-- <button type="submit" class="btn btn-primary">ยืนยัน</button> --}}
                {{-- <button class="btn btn-create" data-toggle="modal" data-target="#create">ยืนยัน</button> --}}
                <button class="btn btn-create" type="submit">ยืนยัน</button>

            </div>
        </div>
    </div>
    </form>
</div>



{{-- modal --}}
<div class="modal fade" id="create" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="font-weight: bold; background-color: #127A0E; color: white;">
                <h5 class="modal-title" id="confirmModalLabel">ยืนยันการเพิ่มพนักงาน</h5>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="modal-body">
                    คุณต้องการเพิ่มพนักงานใช่หรือไม่?
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
<div class="modal fade" id="showsuccessss" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document"
        style="display: flex; align-items: center; min-height: calc(100vh - 20px);">
        <div class="modal-content">
            <br>
            <div class="modal-body">
                <center>
                    <img src="{{ asset('images/success.png') }}" alt="Success Image" width="50ox"
                        height="50px">
                </center>



                <p>
                    <center>เพิ่มพนักงานสำเร็จ</center>
                </p>
            </div>

            </form>
        </div>
    </div>
</div>

<script>
    @if (session('success'))
        // แสดง Modal หลังจาก 500 มิลลิวินาที
        setTimeout(function(){
            $('#showsuccessss').modal('show');

            // ตั้งเวลาให้ปิด Modal หลังจาก 2000 มิลลิวินาที (2 วินาที) หลังจากที่แสดง
            setTimeout(function(){
                $('#showsuccessss').modal('hide');

                // รีเฟรชหน้าเว็บหลังจากปิด Modal อีก 500 มิลลิวินาที
                setTimeout(function(){
                    location.reload();
                }, 500);
            }, 2000);
        }, 500);
    @endif
</script>
<div class="alert-info">
    <p>หลังจากเพิ่มรายชื่อพนักงานเรียบร้อยแล้ว
        พนักงานสามารถเข้าสู่ระบบได้โดยใช้"รหัสประจำตัวพนักงาน"และ"รหัสผ่าน"เป็นเลขเดียวกัน
    </p>
</div>

@endsection
