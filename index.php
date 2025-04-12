<?php session_start(); ?>

<!DOCTYPE html>

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db="ama";

    $conn=mysqli_connect($host, $user, $pass, $db);
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
        <div class="rightalign">
                <button name="login" onclick="location.href='login.php'">Login</button>
                <button name="create" onclick="location.href='create.php'">Skapa</button> 
        </div>
    </header>



<?php 
    $sql = " SELECT * FROM `tblarticle` WHERE 1 ";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        while($row=mysqli_fetch_assoc($result)){ ?>

        <div class="middle">
            <div class="article">
                <h1><?=$row['rubrik'] ?></h1>
                <h2><?=$row['ingress'] ?></h2>
                <p>Författare: <?=$row['writer'] ?></p>
            </div>  
        </div> <?php 
       } 
    } else {
    echo "No results found or query error.";
    }

mysqli_close($conn);
?>

</body>
</html>