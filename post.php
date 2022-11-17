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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <h1>Webboard Na</h1>
    <hr>
    <div class="container">
        <div class="text-center">
            <p>ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"] ?></p>
            <?php
            $number = $_GET["id"];
            if ($number % 2 == 0)
                echo "<p>เป็นกระทู้หมายเลขคู่</p>";
            else
                echo "<p>เป็นกระทู้หมายเลขคี่</p>";
            ?>
        </div>

        <?php

        $con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", 'root', "");
        $sql = "SELECT p.id,p.titile,p.content,p.post_date,c.name,u.name as login
        FROM post p ,category c , user u WHERE p.cat_id = c.id and u.id = p.user_id and p.id = $_GET[id]";

        foreach ($con->query($sql) as $data) { ?>
            <div class="card text-dark bg-white border-warning mb-3">

                <div class="card-header bg-warning text-white"> <?= $data['titile'] ?> </div>
                <div class="card-body ms-2 me-2">
                    <?php
                    echo "<p>$data[content]</p>";
                    echo $data['login'] . " - " . $data['post_date'];

                    ?>
                </div>

            </div>

        <?php } ?>








        <?php

        $con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", 'root', "");
        $sql = "SELECT com.content,com.post_date,u.name FROM comment com , user u 
        where com.user_id = u.id and com.post_id = $_GET[id]";

        $counter = 1;
        foreach ($con->query($sql) as $data) { ?>

            <div class="card text-dark bg-white border-info mb-3">

                <div class="card-header bg-info text-white">ความคิดเห็นที่ <?= $counter ?> </div>
                <div class="card-body ms-2 me-5">
                    <?php
                    echo "<p>$data[content]</p>";
                    echo $data['name'] . " - " . $data['post_date'];

                    ?>
                </div>

            </div>

        <?php
            $counter++;
        } ?>






        <?php
        session_start();
        if (isset($_SESSION['id'])) { ?>

            <form action="post_save.php" method="post">
                <div class="card text-dark bg-white border-success ">

                    <div class="card-header bg-success text-white">แสดงความคิดเห็น</div>
                    <div class="card-body ms-5 me-5">
                        <textarea class="form-control " name="comment" rows="8"></textarea>
                    </div>
                    <input type="hidden" name="post_id" value="<?= $_GET['id']; ?>">
                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-success text-white ">
                            <i class="bi bi-box-arrow-up-right"></i>
                            ส่งข้อความ
                        </button>
                    </div>
                </div>
            </form>

        <?php } ?>



    </div>

    </div>
    <p style="text-align:center;margin-top: 2rem;"><a href="index.php">กลับไปหน้าหลัก</a> </p>
</body>

</html>