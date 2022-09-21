<?php 
    session_start();
    if( !isset($_SESSION['id']) ){
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
        div{
            text-align: left;
        }
    </style>
</head>

<body>

    <h1>Webboard Na</h1>
    <hr>
    
    <div style="float:left">

   

    <form action="" method="get">
        <table>
            <tr>
                <td>ผู้ใช้ :</td>
                <td> <?php echo $_SESSION['username']; ?></td>
            </tr>
            <tr>
                <td>หมวดหมู่ :</td>
                <td>
                    <select name="" id="">
                        <option value="">เรื่องทั่วไป</option>
                        <option value="">เรื่องเรียน</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>หัวข้อ :</td>
                <td> <input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>เนื้อหา :</td>
                <td> <textarea id="w3review" name="" rows="4" ></textarea></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                <button type="submit" >บันทึกข้อความ</button>
                </td>
            </tr>
        </table>

        

    </form>
    </div>
  
</body>

</html>