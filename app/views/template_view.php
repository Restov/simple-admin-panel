<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    if(isset($_SESSION)){
        if($_SESSION['admin'] == 1){
            echo "<a href='login/logout'>Выйти</a><br><br>";
        }
    }
    include 'app/views/'.$content_view; ?>
</body>
</html>