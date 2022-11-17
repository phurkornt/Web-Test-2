<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .box {

            width: 30%;
            border-style: solid;
            border-radius: 3px;
        }
    </style>
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



</head>

<body>
    <div class="container">
        <h1 style="text-align: center;">Webboard Na</h1>
        <?php include "nav.php"; ?>




        <div style="margin: 2rem 30%;">
            <?php if (isset($_SESSION['er'])) { ?>

                <div class="alert alert-danger" role="alert">
                    ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง
                </div>


            <?php unset($_SESSION['er']);
            } ?>
            <form action="vertify.php" method="post">

                <div class="card ">
                    <!-- head -->

                    <div class="card-body">
                        <h5 class="card-title">เข้าสู่ระบบ</h5>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Login</label>
                            <input type="text" class="form-control" name="un" autocomplete='off' aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">password</label>
                            <div class="input-group mb-3">
                            
                                <input id="pwd" type="password" name="pw" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <span class="btn" onclick="showPWD()"  id="c_eye">
                                    <i id="eye_show" class="bi bi-eye-fill"></i>
                                    <i id="eye_hidden" class="bi bi-eye-slash-fill d-none"></i>
                                </span>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-secondary ">Login</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
        <p class="fs-5" style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p>

    </div>

    <script>
        function showPWD(){
            let pwd =document.getElementById("pwd");
            let pwd_select =document.getElementById("pwd").type;
            let show_eye = document.getElementById("eye_show");
            let hidden_eye = document.getElementById("eye_hidden");

            if( pwd_select == "password"){
                pwd.type = "text";
                show_eye.classList.add("d-none");
                hidden_eye.classList.remove("d-none");
            }else if( pwd_select == "text"){
                pwd.type = "password";
                hidden_eye.classList.add("d-none");
                show_eye.classList.remove("d-none");
            }
            
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>