<?php session_start(); ?>
<!DOCTYPE html>

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db="supportflowab";

    $conn=mysqli_connect($host, $user, $pass, $db);

    $sql="SELECT * FROM tblmatters WHERE status='open' OR status='ongoing' ORDER BY created DESC";
    $result = mysqli_query($conn, $sql);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>



<body>
    <header>
        <button name="home" onclick="location.href='index.php'">Hem</button>
    <?php 
        if(isset($_SESSION['role'])){
            $role = $_SESSION['role'];
            if(intval($role)==100){ ?>
                <div class="rightalign">
                    <button name="create" onclick="location.href='create.php'">Skapa</button>  <?php 
            }
        } else {}
        if(isset($_SESSION['role'])){ ?>
                    <button name="logout" onclick="location.href='logout.php'">Log out</button> <?php
        } else { ?>
                    <button name="login" onclick="location.href='login.php'">Log in</button> <?php } ?>
                </div>        
    </header>

    <div class="middle">
        <div class="content">
            <h1>Är du säker att du vill logga ut?</h1>
            <form action="logout.php" method="POST">
                <input type="submit" name="btnLogout" value="Logga ut">
            </form>
        </div>
    </div>

<?php
    if(isset($_POST['btnLogout'])){
        session_start();
        $_SESSION['id']="";
        $_SESSION['role']="";
        $_SESSION['name']="";   
        session_destroy();
        header("Location:index.php"); 
}
?>