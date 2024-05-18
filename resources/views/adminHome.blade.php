@extends('layouts.user')
<title>หน้าแรก</title>
@section('content')
    <style>
        h2 {
            text-align: center;
            margin-top: 30px;
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


        /* ตารางคอนเทนเนอร์ */
        .table-container {
            margin: auto;
            width: 80%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            /* overflow: hidden; */
        }

        /* ตาราง */
        .table {
            width: 100%;
            border-collapse: collapse;
            ลบเส้นขอบตาราง
        }

        /* หัวตาราง */
        .table th {
            background-color: #127A0E;
            color: #ffffff;
            font-size: 16px;
            text-align: center;
            padding: 12px 15px;
        }

        /* เนื้อหาตาราง */
        .table td {
            text-align: center;
            padding: 10px 15px;
        }

        /* แถวคี่ */
        .table tr:nth-child(odd) {
            background-color: #f8f8f8;
            /* สีพื้นหลังแถวคี่ */
        }

        /* แถวคู่ */
        .table tr:nth-child(even) {
            background-color: #fff;
            /* สีพื้นหลังแถวคู่ */
        }

        /* ลิงก์ดูรายละเอียด */
        .detail-link {
            color: #127A0E;
            text-decoration: none;
            transition: color 0.3s, background-color 0.3s;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .detail-link:hover {
            color: #fff;
            background-color: #E49900;
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

        #now a {
            color: #ff0000;
            /* กำหนดสีข้อความของลิงก์ในข้อความที่มี ID เป็น "now" */
        }
    </style>

    <ol class="breadcrumb">
        <li class="breadcrumb-item" id="now"><a href="{{ route('admin.home') }}">หน้าแรก</a></li>
        <li class="breadcrumb-item active" aria-current="page">รายละเอียด</li>
        <li class="breadcrumb-item active" aria-current="page">ประวัติขอใบอนุมัติ</li>
    </ol>


    <h2>รายชื่อพนักงาน</h2>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>ชื่อ</th>
                    <th>ตำแหน่ง</th>
                    <th>รายละเอียด</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $users)
                    @if ($users->is_admin !== 1)
                        <tr>
                            <td>{{ $users->prefix }}{{ $users->name }} {{ $users->lname }}</td>
                            <td>{{ $users->position }}</td>
                            <td>
                                <a href="{{ route('userdetail', ['id' => $users->id]) }}"
                                    class="detail-link">ดูรายละเอียด</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection