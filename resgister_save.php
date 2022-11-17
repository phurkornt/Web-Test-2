<?php 

session_start();


$login = $_POST['login'];
$password = sha1($_POST['pwd']);
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");

$sql = "SELECT * FROM user WHERE login = '$login'";
$result = $conn->query($sql);

// $_SESSION['add_login']='error';

if($result->rowCount() ==1 ){
    echo "ERROR";
    $_SESSION['add_login']='error';
    header('location:register.php');
}else{

    $sql = "INSERT INTO  user ( login ,  password ,  name ,  gender ,  email ,  role )
    VALUES ('$login','$password','$name','$gender','$email','m')";
    $conn->exec($sql);
    $_SESSION['add_login']='success';
    header('location:register.php');
    
}


// header('location:index.php');
$conn=null;;

?>
