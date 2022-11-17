
<?php 
    session_start();
    if(!isset($_SESSION['id']))header("location:index.php");

    $id = $_GET['id'];
    if ( $_SESSION['role'] == 'a' ){
        echo "<p> ลบกระทู้หมายเลข :" . $id . " </p>";
        $con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        $sql = "DELETE FROM post WHERE id =$id";
        $con ->exec($sql);
        $sql = "DELETE FROM comment WHERE post_id =$id";
        $con ->exec($sql);
        header("Location:index.php");

    }else{
        header("Location:index.php");
    }
    

?>

