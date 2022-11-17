<?php session_start(); ?>
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

        a.no {
            text-decoration: none;
        }
    </style>
    <!-- CSS only -->


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


</head>

<body>
    <div class="container">
       

        <h1>Webboard Na</h1>

        <?php include "nav.php"; ?>


        
        <div class="dropdown mt-2 mb-5">
            <label class="  d-inline">หมวดหมู่</label>
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">-- ทั้งหมด --</button>
            <ul class="dropdown-menu">
                <?php
                $con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                $sql = "select * from category";
                foreach ($con->query($sql) as $row) {
                    echo "<li><a class='dropdown-item' href=" . $row['id'] . ">$row[name]</a></li>";
                }
                ?>
            </ul>
            <?php 
            if (isset($_SESSION['role'])){
                echo " <a class='btn btn-success' href='newpost.php' style='text-decoration:none;float: right;display: inline;'>สร้างกระทู้ใหม่</a>";
            }
            
            ?>
            
           
           
            
        </div>


        







            

        <table class="table table-striped table-hover">
            <?php
            $con  = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
            $sql  = "SELECT p.id,p.titile,p.content,p.post_date,c.name,u.name as login
                     FROM post p ,category c , user u WHERE p.cat_id = c.id and u.id = p.user_id
                     ORDER BY p.post_date DESC";

            if (isset($_SESSION['role']) && $_SESSION['role'] == "a") {
                $result = $con->query($sql);
                foreach ($result as $data) {
                    echo "<tr>";

                    echo "<td> <span>[ " . $data['name'] . " ]</span> <a style='text-decoration:none'  href='post.php?id=" . $data['id'] . " '>" . $data['titile'] . "</a> ";
                    echo "<a onclick='return isSure()' class='btn btn-danger trach float-end' href=delete.php?id=" . $data['id']  . " ><i class='bi bi-trash'></i></a> ";
                    echo "<br><span>" . $data['login'] . " - " . $data['post_date'] . "</span></td></tr>";

                    
                    echo "";
                    echo "";
                }
                
                // for ($i = 1; $i <= 10; $i++) {
                //     echo "<tr><td><a class='no' href=post.php?id=" . $i . " > กระทู้ที่ " . $i . "</a>";
                //     echo "<a onclick='return isSure()' class='btn btn-danger p-1 ms-5 trach' href=delete.php?id=" . $i . " ><i class='bi bi-trash'></i></a></td></tr>";
                // }
            } else {
                $result = $con->query($sql);
                foreach ($result as $data) {
                    echo "<tr>";

                    echo "<td> <span>[ " . $data['name'] . " ]</span> <a style='text-decoration:none'  href='post.php?id=" . $data['id'] . " '>" . $data['titile'] . "</a><br>";
                    echo "<span>" . $data['login'] . " - " . $data['post_date'] . "</span>  </td>";

                    echo "</tr>";
                }
            }


            ?>


        </table>

    </div>
    <script>
        function isSure() {
            return confirm("ต้องการจะจริงหรือไม่");
        }
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>