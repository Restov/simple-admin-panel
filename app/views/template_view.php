<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../../styles/style.css">

    <?php
    if(isset($_SESSION['error'])) {
        echo "<br> <p class='alert alert-danger'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
    if($_SERVER['REQUEST_URI'] != '/login'){
        echo "<a href='/main/list'>Главная</a><br>";
    }
    if(isset($_SESSION)){
        if($_SESSION['admin'] == 1){
            echo "<a href='../login/logout'>Выйти</a><br><br>";
        }
    }
    include 'app/views/'.$content_view; ?>
</body>
</html>