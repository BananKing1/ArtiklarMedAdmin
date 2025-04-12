<?php session_start(); ?>

<!DOCTYPE html>

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db="ama";

    $conn=mysqli_connect($host, $user, $pass, $db);

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']); }

    $sql = "SELECT * FROM `tblarticle` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql);
    $article = mysqli_fetch_assoc($result);
    mysqli_close($conn);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<style>
    .middle{
        justify-content: none;
        align-items: left;
        text-align: left;
    }
</style>

<body>
    <header>
        <button name="home" onclick="location.href='index.php'">Hem</button>
        
    <?php 
        if(isset($_SESSION['role'])){
            $role = $_SESSION['role'];
            if(intval($role)==100){ ?>
                    <button name="create" onclick="location.href='create.php'">Skapa</button>  <?php 
            }
        } else {}
        if(isset($_SESSION['role'])){
            $role = $_SESSION['role'];
            if($role == null){ ?>
                <button name="login" onclick="location.href='login.php'">Logga in</button> <?php 
            } else { ?>
                <button name="logout" onclick="location.href='logout.php'">Logga ut</button> <?php }  
        }else{ ?>
            <button name="login" onclick="location.href='login.php'">Logga in</button> <?php 
        } ?>        
    </header>

    <div class="middle">
        <div class="content">
            <h1><?=$article['rubrik']?></h1>
            <h2><?=$article['ingress']?></h2>
            <br> <br>
            <h2><?=$article['bread']?></h2>
            <br>
            <p><?=$article['writer']?></p>
        </div>
    </div>
</body>
</html>