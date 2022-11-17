<?php
session_start();
if (!isset($_SESSION['id'])) {
    // header("Location:index.php");
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
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"> -->
</head>

<body>

    <h1>Webboard Na</h1>
    <hr>

    <div class="container">





        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card text-dark bg-white border-primary ">
                    <div class="card-header bg-primary text-white">ตั้งกระทู้ใหม่</div>
                    <div class="card-body">
                        <form action="newpost_save.php" method="post" >
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label">หมวดหมู่ :</label>
                                <div class="col-md-9">
                                <select name="category" class="form-select">
                                    <?php
                                        $con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
                                        $sql = "SELECT * FROM category";
                                        foreach( $con->query($sql) as $row ){
                                            echo "<option value=".$row['id'].">$row[name]</option>";
                                        } 
                                        $con = null;
                                    ?>
                                </select>


                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-md-3 col-form-label">หัวข้อ :</label>
                                <div class="col-md-9">
                                    <input type="text" name="topic" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3 col-form-label">เนื้อหา :</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="comment" rows="8"></textarea>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-info text-white ">
                                    <i class="bi bi-play-btn"></i>   
                                    บันทึกข้อความ
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>

</html>