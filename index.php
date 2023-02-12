<?php 
    include('incl/connect.php');

    session_start();
    // include('incl/connect.php'); 
    if(isset($_SESSION['uid'])){
        $query="SELECT * FROM azimut_user WHERE id='{$_SESSION['uid']}'";
        $result=$link->query($query);
        $user=$result->fetch_assoc();
    }
    if($_REQUEST['do']=='exit'){
        session_unset();
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:regular,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Playfair+Display:regular&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <title>Финансовый эксперт</title>
</head>
<body>
    <?php
    if(isset($_SESSION['uid'])){
        include('incl/admin.php');
    }else{
        include('incl/main.php');
    };
    ?>
</body>
</html>