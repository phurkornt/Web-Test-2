<?php 
    session_start();
    if( isset($_SESSION['id']) ){
        header("Location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
         body {
            font-family: sans-serif;
            font-size: 1.2rem;
        }
        h1{
            text-align: center;
            font-size: 2rem;
        }
        
    
        table{
            border: 2px solid black;
            /* margin: 0% 35%; */
            width: 320px;
            
        }
       
    </style>
</head>
<body>
    <h1>Webboard Na</h1>
    <hr>
    <form action="" method="get">
    <table align="center" >
        <tr>
            <td colspan="2" style="background-color:#6cd2fe;">กรอกข้อมูล</td>
        </tr>
        <tr>
            <td>ชื่อบัญชี :</td>
            <td><input type="text" name="un" id=""></td>
        </tr>
        <tr>
            <td>รหัสผ่าน :</td>
            <td><input type="password" name="pw" id=""></td>
        </tr>
        <tr>
            <td>ชื่อ-นามสกุล :</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr><td rowspan="4">เพศ :</td></tr>

        <tr><td><input type="radio" name="gender" value="boy">ชาย</td></tr>
        <tr><td><input type="radio" name="gender" value="girl">หญิง</td></tr>
        <tr><td><input type="radio" name="gender" value="anoter">อื่นๆ</td></tr>
        
        <tr>
            <td>อี-เมล :</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr><td colspan="2" style="text-align: center;"><input type="submit" value="สมัครสมาชิก"></td></tr>
    </table>
</form>

    <p style="text-align:center;"><a href="index.php" >กลับไปหน้าหลัก</a> </p>
</body>
</html>