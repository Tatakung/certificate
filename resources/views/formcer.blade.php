@extends('layouts.user')
@section('title', 'ขอใบอนุมัติเดินทาง')
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
            width: 90%;
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
            /* Green background */
            border: none;
            /* Remove borders */
            color: white;
            /* White text */
            padding: 15px 32px;
            /* Some padding */
            text-align: center;
            /* Center text */
            text-decoration: none;
            /* No text decoration */
            display: inline-block;
            /* Inline block */
            font-size: 16px;
            /* Increase font size */
            border-radius: 8px;
            /* Rounded corners */
        }

        .btn-create:hover {
            background-color: #E49900;
            /* Yellow background on hover */
        }

        input[readonly] {
            background-color: #f2f2f2;
            /* Gray background color */
        }

        input[readonly]:focus {
            background-color: #f2f2f2;
            /* Ensure background color remains gray even when focused */
            outline: none;
            /* Remove the default focus outline */
        }

        .row {
            margin-top: 10px;
            /* ระยะห่างจากบน 20px */
            margin-bottom: 10px;
        }
        .breadcrumb {
            background-color: #ffffff;
            /* กำหนดสีพื้นหลังของ breadcrumb */
            padding: 10px 15px;
            /* กำหนดระยะห่างของขอบใน breadcrumb */
            border-radius: 4px;
            /* กำหนดรูปร่างของมุมใน breadcrumb */
        }

        .breadcrumb-item.active {
            color: #605e5e;
            /* กำหนดสีข้อความของ breadcrumb item ที่ active */
        }

        #notcolor a {
            color: #605e5e;
            /* กำหนดสีข้อความของลิงก์ในข้อความที่มี ID เป็น "now" */
        }
        #now a{
            color: #ff0000;
            /* กำหนดสีข้อความของลิงก์ในข้อความที่มี ID เป็น "now" */
        }
</style>
<ol class="breadcrumb">
    <li class="breadcrumb-item" id="notcolor"><a href="{{ route('homepage') }}">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page" id="now"><a href="">ขออนุมัติเดินทาง</a></li>

</ol>
<h2>ขอใบอนุมัติเดินทาง</h2>
<div class="form-container">
    <form action="{{ route('savedata') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="prefix" class="form-label">เรียน</label>
                    <select class="form-select" id="at" name="at" required>
                        <option value="" disabled selected>กรุณาเลือกรายการ</option>
                        <option value="กยท.จ.ประจวบคีรีขันธ์">กยท.จ.ประจวบคีรีขันธ์</option>
                        <option value="กยท.ข.ภาคใต้ตอนบน">กยท.ข.ภาคใต้ตอนบน</option>
                    </select>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="prefix" class="form-label">คำนำหน้า</label>
                    <input type="text" class="form-control" id="prefix" name="prefix"
                        value="{{ Auth::user()->prefix }}" readonly>
                </div>
                <div class="col-md-4">
                    <label for="name" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ Auth::user()->name }}" readonly>

                </div>
                <div class="col-md-4">
                    <label for="lname" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" name="lname"
                        value="{{ Auth::user()->lname }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="position" class="form-label">ตำแหน่ง</label>
                    <input type="text" class="form-control" id="position" name="position"
                        value="{{ Auth::user()->position }}" readonly>
                </div>
                <div class="col-md-4">
                    <label for="level" class="form-label">ระดับ</label>
                    <select class="form-select" id="level" name="level" required>
                        <option value="" disabled selected>กรุณาเลือกรายการ</option>
                        <option value="1">ระดับ 1</option>
                        <option value="2">ระดับ 2</option>
                        <option value="3">ระดับ 3</option>
                        <option value="4">ระดับ 4</option>
                        <option value="5">ระดับ 5</option>
                        <option value="6">ระดับ 6</option>
                        <option value="7">ระดับ 7</option>
                        <option value="8">ระดับ 8</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="department" class="form-label">สังกัด</label>
                    <select class="form-select" id="department" name="department" required>
                        <option value="" disabled selected>เลือกสังกัด</option>
                        <option value="กองประสานนโยบายและวิชาการ">กองประสานนโยบายและวิชาการ</option>
                        <option value="กองงานสนับสนุน">กองงานสนับสนุน</option>
                    </select>
                </div>



            </div>



            <div class="row">
                <div class="col-md-4">
                    <label for="budget_reference" class="form-label">งบประมาณที่ใช้จ่ายจากมาตรา</label>
                    <select class="form-select" id="budget_reference" name="budget_reference" required>
                        <option value="" disabled selected>เลือกรายการ</option>
                        <option value="49(1)">49(1)</option>
                        <option value="49(2)">49(2)</option>
                        <option value="49(3)">49(3)</option>
                        <option value="49(4)">49(4)</option>
                        <option value="49(5)">49(5)</option>
                        <option value="49(6)">49(6)</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="action_plan" class="form-label">แผนปฏิบัติการ</label>
                    <input type="text" class="form-control" id="action_plan" name="action_plan"
                        placeholder="แผนปฏิบัติการ" required>
                </div>
                <div class="col-md-4">
                    <label for="activity" class="form-label">กิจกรรม</label>
                    <input type="text" class="form-control" id="activity" name="activity"
                        placeholder="กิจกรรม" required>
                </div>
            </div>


            <h4>ขออนุมัติเดินทางตั้งแต่วันที่</h4>
            <div class="row">
                <div class="col-md-4">
                    {{-- วันเริ่มต้น<span class="dokjan"></span> --}}
                    <label for="" class="form-label">วันเริ่มต้น</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" required
                        min="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="col-md-4">
                    {{-- วันสิ้นสุด<span class="dokjan"></span> --}}
                    <label for="" class="form-label">วันสิ้นสุด</label>

                    <input type="date" name="end_date" id="end_date" class="form-control" required
                        min="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="row" id="dateFields"></div>

                <script>
                    var startDateInput = document.getElementById('start_date');
                    var endDateInput = document.getElementById('end_date');
                    var dateFields = document.getElementById('dateFields');

                    startDateInput.addEventListener('change', generateDateFields);
                    endDateInput.addEventListener('change', generateDateFields);

                    function generateDateFields() {
                        var startDate = new Date(startDateInput.value);
                        var endDate = new Date(endDateInput.value);

                        if (!isNaN(startDate) && !isNaN(endDate) && startDate <= endDate) {
                            dateFields.innerHTML = '';

                            var currentDate = new Date(startDate);
                            var dayNumber = 1;

                            while (currentDate <= endDate) {
                                if (dayNumber % 3 === 1) { // Check if it's the first day of the row
                                    createInputRow(dateFields);
                                }

                                createInput(currentDate, dateFields.lastChild, dayNumber); // Add input fields to the last row
                                currentDate.setDate(currentDate.getDate() + 1);
                                dayNumber++;
                            }
                        }
                    }

                    function createInputRow(container) {
                        var row = document.createElement('div');
                        row.classList.add('row');
                        container.appendChild(row); // Add the row to the container
                    }

                    function createInput(date, container, dayNumber) {
                        var dateCol = document.createElement('div');
                        dateCol.classList.add('col-md-4');

                        var dateLabel = document.createElement('label');
                        dateLabel.textContent = 'วันที่';
                        dateCol.appendChild(dateLabel);

                        var dateInput = document.createElement('input');
                        dateInput.type = 'date';
                        dateInput.name = 'date[]';
                        dateInput.classList.add('form-control');
                        dateInput.required = true;
                        dateInput.readOnly = true;
                        dateInput.value = formatDate(date);
                        dateCol.appendChild(dateInput);

                        container.appendChild(dateCol);

                        var locationCol = document.createElement('div');
                        locationCol.classList.add('col-md-4');

                        var locationLabel = document.createElement('label');
                        locationLabel.textContent = 'ท้องที่หรือสถานที่ปฏิบัติงาน';
                        locationCol.appendChild(locationLabel);

                        var locationInput = document.createElement('input');
                        locationInput.type = 'text';
                        locationInput.name = 'location[]';
                        locationInput.classList.add('form-control');
                        locationInput.required = true;
                        locationInput.placeholder = "ท้องที่หรือสถานที่ปฏิบัติงาน"
                        locationCol.appendChild(locationInput);

                        container.appendChild(locationCol);

                        var taskCol = document.createElement('div');
                        taskCol.classList.add('col-md-4');

                        var taskLabel = document.createElement('label');
                        taskLabel.textContent = 'งานที่ปฏิบัติ';
                        taskCol.appendChild(taskLabel);

                        var taskInput = document.createElement('input');
                        taskInput.type = 'text';
                        taskInput.name = 'task[]';
                        taskInput.classList.add('form-control');
                        taskInput.required = true;
                        taskInput.placeholder = "งานที่ปฏิบัติ";
                        taskCol.appendChild(taskInput);

                        container.appendChild(taskCol);
                    }

                    function formatDate(date) {
                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var year = date.getFullYear();
                        return year + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;
                    }
                </script>
            </div>






            <div class="row">
                <div class="col-md-4">
                    จำนวนคนที่เดินทางไปปฏิบัติงานเป็นหมู่คณะ(คน)
                    <input type="number" name="faculty_count" id="faculty_count" class="form-control"
                        placeholder="ระบุจำนวนคน (ถ้ามีโปรดระบุ)" min="1">
                </div>
                <div id="facultyFields"></div>
                <script>
                    var facultyCountInput = document.getElementById('faculty_count');
                    var facultyFields = document.getElementById('facultyFields');
                    var usersData = @json($users); // โหลดข้อมูลผู้ใช้จาก Laravel blade ไปยัง JavaScript
                    

                    facultyCountInput.addEventListener('input', generateFacultyFields);

                    function generateFacultyFields() {
                        var count = parseInt(facultyCountInput.value, 10);
                        facultyFields.innerHTML = '';

                        for (var i = 1; i <= count; i++) {
                            createFacultyInputs(i, facultyFields);
                        }
                    }

                    function createFacultyInputs(index, container) {
                        var row = document.createElement('div');
                        row.classList.add('row');

                        var nameCol = document.createElement('div');
                        nameCol.classList.add('col-md-4');
                        var nameLabel = document.createElement('label');
                        nameLabel.textContent = 'ชื่อคนที่ ' + index + ':';
                        var nameSelect = document.createElement('select');
                        nameSelect.name = 'name_' + index;
                        nameSelect.id = 'nameSelect_' + index; // ใส่ id เพื่อใช้ใน event listener
                        nameSelect.classList.add('form-control');
                        nameSelect.required = true;

                        // สร้างตัวเลือกแรกที่ว่างเปล่า โดยตั้งค่าให้เป็น disabled และ selected
                        var defaultOption = new Option("กรุณาเลือกรายชื่อ", "");
                        defaultOption.disabled = true;
                        defaultOption.selected = true;
                        nameSelect.appendChild(defaultOption);

                        usersData.forEach(function(user) {
                            // ตรวจสอบว่าผู้ใช้ไม่ใช่ admin หรือ is_admin มีค่าไม่เท่ากับ 1
                            if (!user.is_admin || user.is_admin != 1) {
                                var fullName = user.prefix + '' + user.name + ' ' + user.lname; // สร้างชื่อแบบเต็ม
                                var option = new Option(fullName,user.id); 
                                nameSelect.appendChild(option);
                                
                            }
                        });

                
                        nameCol.appendChild(nameLabel);
                        nameCol.appendChild(nameSelect);
                        row.appendChild(nameCol);

                        var positionCol = document.createElement('div');
                        positionCol.classList.add('col-md-4');
                        var positionLabel = document.createElement('label');
                        positionLabel.textContent = 'ตำแหน่งคนที่ ' + index;
                        var positionInput = document.createElement('input');
                        positionInput.type = 'text';
                        positionInput.name = 'position_' + index;
                        positionInput.id = 'position_' + index; // ใส่ id เพื่อใช้ในการอัพเดท
                        positionInput.classList.add('form-control');
                        positionInput.required = true;
                        positionInput.readOnly = true; // ตั้งค่าให้ input เป็นแบบ readonly
                        positionCol.appendChild(positionLabel);
                        positionCol.appendChild(positionInput);
                        row.appendChild(positionCol);

                        var noteCol = document.createElement('div');
                        noteCol.classList.add('col-md-4');
                        var noteLabel = document.createElement('label');
                        noteLabel.textContent = 'หมายเหตุ';
                        var noteInput = document.createElement('input');
                        noteInput.type = 'text';
                        noteInput.name = 'note_' + index;
                        noteInput.placeholder = "ถ้ามีโปรดระบุ"
                        noteInput.classList.add('form-control');
                        noteCol.appendChild(noteLabel);
                        noteCol.appendChild(noteInput);
                        row.appendChild(noteCol);

                        container.appendChild(row);

                        // ตั้งค่า event listener สำหรับการเปลี่ยนแปลง dropdown
                        nameSelect.addEventListener('change', function() {
                            updatePositionInput(index, this.value);
                        });
                    }

                    function updatePositionInput(index, userId) {
                        var positionInput = document.getElementById('position_' + index);
                        var user = usersData.find(user => user.id == userId);
                        positionInput.value = user ? user.position : ''; // ตั้งค่าตำแหน่งถ้ามีข้อมูลผู้ใช้
                    }

                    
                </script>
            </div>


            <h4>พาหนะส่วนตัว</h4>
            <div class="row">
                <br>



                <div class="col-md-4">
                    <label for="budget_reference" class="form-label">โปรดเลือกประเภท</label>
                    <select class="form-select" id="transport" name="transport" required>
                        <option value="" disabled selected>เลือกประเภทรถที่ใช้</option>
                        <option value="รถยนต์">รถยนต์</option>
                        <option value="รถจักรยานยนต์">รถจักรยานยนต์</option>
                        <option value="รถยนต์ สนง.">รถยนต์ สนง.</option>
                    </select>
                </div>




                <div class="col-md-4">
                    <label for="action_plan" class="form-label">หมายเลขทะเบียนรถ</label>
                    <input type="text" class="form-control" id="vehicle_number" name="vehicle_number"
                        placeholder="หมายเลขทะเบียน" required>
                </div>

            </div>

            <h4>ขอพักแรม</h4>
            <p><span class="dokjan2"> </span>กรณีที่ไม่ได้มีการพักแรมไม่ต้องระบุ</p>
            <div class="row">
                <div class="col-md-4">
                    วันเริ่มต้น
                    <input type="date" name="vacation_start_date" id="vacation_start_date"
                        class="form-control" min="<?php echo date('Y-m-d'); ?>">

                </div>

                <div class="col-md-4">
                    วันสิ้นสุด
                    <input type="date" name="vacation_end_date" id="vacation_end_date" class="form-control"
                        min="<?php echo date('Y-m-d'); ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">ยืนยัน</button>
                    {{-- <button class="btn btn-create" type="submit" data-toggle="modal"
                        data-target="#create">ยืนยัน</button> --}}

                </div>
            </div>
        </div>
    </form>
</div>


@endsection

