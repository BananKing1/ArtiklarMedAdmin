<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="POST">
        <input type="text" name="pass">
        <input type="submit" name="btn">
    </form>


<?php 
    if(isset($_POST['btn'])){
        $role = $_SESSION['role'];
        $pass = $_POST['pass'];
        echo md5($pass);   
        echo $role;     
    }
?>
    
</body>
</html>