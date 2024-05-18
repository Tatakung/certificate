<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>





<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="main.css">



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <style>
        html,
        body {
            /* background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg'); */
            background-image: url('/images/background.jpg');

            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;

        }

        .container {
            height: 100%;
            align-content: center;
        }

        .card {
            height: 300px;
            margin-top: auto;
            margin-bottom: auto;
            width: 450px;
            background-color: rgba(0, 0, 0, 0.5) !important;
        }

        .social_icon span {
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover {
            color: white;
            cursor: pointer;
        }

        .card-header h3 {
            color: white;
            /* text-align: center ; */
        }

        .social_icon {
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span {
            width: 50px;
            background-color: #FFC312;
            color: black;
            border: 0 !important;
        }

        input:focus {
            outline: 0 0 0 0 !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember {
            color: white;
        }

        .remember input {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn {
            color: black;
            background-color: #FFC312;
            width: 400px;
        }

        .login_btn:hover {
            color: black;
            background-color: white;
        }

        .links {
            color: white;
        }

        .links a {
            margin-left: 4px;
        }


        /* CSS สำหรับ Modal */
    .modal-dialog.modal-lg {
        width: 400px; /* กำหนดความกว้างของ Modal */
        max-width: 100%; /* กำหนดความกว้างสูงสุดของ Modal */
        min-height: calc(100vh - 20px); /* กำหนดความสูงของ Modal ให้เท่ากับ 100% ของหน้าจอและลบ 20px */
        margin: auto; /* จัดวาง Modal ตรงกลาง */
        display: flex; /* ให้ Modal มีการจัดแสดงเป็น Flex */
        box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5); /* เพิ่มเงาให้ Modal (เงาน้อยที่สุด) */
        align-items: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวแกนตั้ง */
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>เข้าสู่ระบบ</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="numberid" type="number" class="form-control" name="numberid"
                                placeholder="เลขประจำตัว" required autocomplete="numberid" autofocus>
                            {{-- <input id="numberid" type="number" class="form-control @error('numberid') is-invalid @enderror" name="numberid" value="{{ old('numberid') }}" required autocomplete="numberid" autofocus> --}}


                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input id="password" type="password" class="form-control" name="password"
                                placeholder="รหัสผ่าน" required autocomplete="current-password">
                            {{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> --}}

                        </div>

                        {{-- <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div> --}}

                        {{-- <div class="form-group">
                            <input type="submit" value="เข้าสู่ระบบ" class="btn float-right login_btn">
                        </div> --}}
                </div>
                <div class="card-footer">

                    <div class="form-group text-center">
                        <input type="submit" value="เข้าสู่ระบบ" class="btn login_btn">

                    </div>

                    {{-- <div class="d-flex justify-content-center links">
                        ขออนุมัติเดินทางไปปฏิบัติงาน
                    </div> --}}
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Modalแสดงข้อความสำเร็จ-->
    <div class="modal fade" id="showerror" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document" >

            <div class="modal-content">
                <br>
                <div class="modal-body">
                    <center>
                        <img src="{{ asset('images/exclamation.png') }}" alt="Success Image" width="50ox" height="50px">
                    </center>
                    <p>
                        <center>ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง
                            โปรดตรวจสอบ</center>
                    </p>
                </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        @if (session('error'))
            // แสดง Modal หลังจาก 500 มิลลิวินาที
            setTimeout(function() {
                $('#showerror').modal('show');
                setTimeout(function() {
                    $('#showerror').modal('hide');

                }, 9000);
            }, 500);
        @endif
    </script>




</body>

</html>
