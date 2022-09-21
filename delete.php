
<?php 
    session_start();

    $id = $_GET['id'];

    if ( $_SESSION['role'] == 'a' ){
        echo "<p> ลบกระทู้หมายเลข :" . $id . "</p>";
    }else{
        header("Location:index.php");
    }
    

?>