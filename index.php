<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 1.2rem;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
        }

      
    </style>
</head>

<body>
    <h1>Webboard Na</h1>
    <hr>
    <span>หมวดหมู่ :</span>
    <select name="" id="">
        <option value="">-- ทั้งหมด --</option>
        <option value="">เรื่องทั่วไป</option>
        <option value="">เรื่องเรียน</option>
    </select>
    <span style="float: right;"></span>
    <a href="login.html" style="float: right;">เข้าสู่ระบบ</a>
    <br><br><br>
    <ul>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li><a href=post.php?id=" . $i . " > กระทู้ที่ " . $i . "</a></li>";
        }
        ?>
        <!-- <li><a href="post.php?id=1">กระทู้ที่ 1</a></li>
        <li><a href="post.php?id=2">กระทู้ที่ 2</a></li>
        <li><a href="post.php?id=3">กระทู้ที่ 3</a></li>
        <li><a href="post.php?id=4">กระทู้ที่ 4</a></li>
        <li><a href="post.php?id=5">กระทู้ที่ 5</a></li> -->

    </ul>
</body>

</html>