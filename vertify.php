<?php
session_start();
if (isset($_SESSION['id'])) {
    header("Location:index.php");
    die();
}

$user = $_POST["un"];
$pass = sha1($_POST['pw']);;

$con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
$sql = "SELECT * FROM user where login='$user' and password='$pass'";
$result = $con->query($sql);

if ($result->rowCount() == 1) {
    $data = $result->fetch();
    $_SESSION['username'] = $data['login'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['user_id'] = $data['id'];
    $_SESSION['id'] = session_id();
    header("Location:index.php");
} else {
    $_SESSION['er'] = "er";
    header("Location:login.php");
    die();
}

?>
