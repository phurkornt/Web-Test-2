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
    <h3 style="display:inline;">หมวดหมู่ :</h3>
    <select name="" id="">
        <option value="">-- ทั้งหมด --</option>
        <option value="">เรื่องทั่วไป</option>
        <option value="">เรื่องเรียน</option>
    </select>
    <span style="float: right;"></span
    >
    <?php 

        session_start();
        if( isset( $_SESSION['id']  ) ){
           echo "<span style='float:right'; > ผู้ใช้งานระบบ : " .$_SESSION['username'] ;
           echo "<a href='logout.php' style='margin-left:10px'</a>ออกจากระบบ</a>" ."</span>";
           echo "<br><a href='newpost.php' style='float: left;'>สร้างกระทู้ใหม่</a>" ;
        }else{
           echo "<a href='login.php' style='float: right;'>เข้าสู่ระบบ</a>" ;
        }
        
    ?>

    
    <br><br><br>
    <ul>
        <?php
        if( !isset( $_SESSION['role']  ) ){
            for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href=post.php?id=" . $i . " > กระทู้ที่ " . $i . "</a></li>";
            }
        }else{
            if( $_SESSION['role'] == "a"  ){
                for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href=post.php?id=" . $i . " > กระทู้ที่ " . $i . "</a>" . "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=".$i." >ลบ </a></li>";
                }
            }else{
                for ($i = 1; $i <= 10; $i++) {
                    echo "<li><a href=post.php?id=" . $i . " > กระทู้ที่ " . $i . "</a></li>";
                }
            }
        }

        
        ?>


    </ul>
</body>

</html>