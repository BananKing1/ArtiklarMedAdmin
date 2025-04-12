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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">
</head>
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
        <?php 
        $sql = " SELECT * FROM `tblarticle` WHERE 1 ";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            while($row=mysqli_fetch_assoc($result)){ 
                $article_id = $row['id']?>
        <div class="article">
        <h1> <a href="article.php?id=<?=$row['id']?>"> <?=$row['rubrik']?></a></h1>
            <h2><?=$row['ingress'] ?></h2>
            <p>Författare: <?=$row['writer'] ?></p>
        </div> <?php
        
            }
        }else{
            echo "No results found or query error.";
            mysqli_close($conn);
        } ?>
    </div> 
</body>
</html>