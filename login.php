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
    <title>login</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 1.2rem;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            text-align: center;
        }
    
    
        table{
            
            border: 2px solid black;
            border-radius: 5px;
            width: 300px;
        }
        button{
            padding: 0.5rem 2rem;
            width: 8rem;
            background-color: aquamarine;
            border: none;
            border-radius: 10px;
            /* border: 10px; */
        }
        button:hover{
            background-color:#a3e2cc;
        }
       
    </style>
</head>
<body>
    
    <h1>Webboard Na</h1>
    <hr>
    <form action="vertify.php" method="post">
    <table align="center" style="text-align: center;">
        <tr>
            <td colspan="2" style="background-color:#6cd2fe;">เข้าสู่ระบบ</td>
        </tr>
        <tr>
            <td>Login</td>
            <td><input type="text" name="un" autocomplete ='off' ></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pw" ></td>
        </tr>
        
        <tr><td colspan="2" style="text-align: center;"><br><button type="submit">Login</button></td></tr>
        
    </table>
</form>
    <p style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p>
</body>
</html>