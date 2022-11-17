
<?php 
    session_start();
    $type = $_POST['category'];
    $topic = $_POST['topic'];
    $content = $_POST['comment'];


    $con = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "INSERT INTO post (titile, content,post_date, cat_id, user_id) VALUES ('$topic','$content',now(),$type,$_SESSION[user_id]) ";
    
    
    if( $con->exec($sql) ){
        header("location:index.php");
    }

    
    // $_SESSION['username'] = $data['login'];
    // $_SESSION['role'] = $data['role'];
    // $_SESSION['user_id'] = $data['id'];
    // $_SESSION['id'] = session_id();
    // echo $type.$topic.$detail;

?> 