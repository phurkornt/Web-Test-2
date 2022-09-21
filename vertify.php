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
        table {
            border: 2px solid black;
            width: 300px;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
        }

        body {
            text-align: center;
            font-family: sans-serif;
            font-size: 1.2rem;
        }

        .no-margin {
            margin: 0;
        }

       
    </style>
</head>

<body>

    <h1>Webboard Na</h1>
    <hr>
    <?php
    $user = $_POST["un"];
    $pass = $_POST["pw"];



    if ($user == "admin" && $pass == "ad1234") {
        $_SESSION['username'] = 'admin';
        $_SESSION['role'] = 'a';
        $_SESSION['id'] = session_id();
        echo "<p>ยินดีต้อนรับคุณ ADMIN </p>";
    } else if ($user == "member" && $pass == "mem1234") {
        $_SESSION['username'] = 'member';
        $_SESSION['role'] = 'm';
        $_SESSION['id'] = session_id();
        echo "<p>ยินดีต้อนรับคุณ MEMBER </p>";
    } else {
        echo "<p>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</p>";
    }

    ?>

    <p style="text-align:center;"><a href="index.php">กลับไปหน้าหลัก</a> </p>
</body>

</html>