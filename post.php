<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        table{
            border: 2px solid black;
            width: 300px;
        }
        body {
            font-family: sans-serif;
            font-size: 1.2rem;
            text-align: center;
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
    <p>ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]?></p>
    <?php
        $number = $_GET["id"];
        if($number % 2 == 0)
            echo "<p>เป็นกระทู้หมายเลขคู่</p>";
        else
            echo "<p>เป็นกระทู้หมายเลขคี่</p>";
        
        
    ?>
    <div id="box">
    <form action="" method="post">
    <table style = "border: 2px solid black; width: 50px;margin:0 auto;">
            <tr><td style="background-color :#6CD2FE;" colspan="2">แสดงความคิดเห็น</td></tr>
            <tr><td><textarea nsme = "message" rows="3" cols="30"></textarea><td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    </form>
    </div>
  <p style="text-align:center;"><a href="index.php" >กลับไปหน้าหลัก</a> </p>
</body>
</html>