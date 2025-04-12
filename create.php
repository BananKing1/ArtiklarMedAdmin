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
    
    <?php
        if(isset($_POST['btnCreateUser'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $role = $_POST['role'];
    
            $sql = "INSERT INTO tblusers(username, role, password) VALUES ('$username','$role','$password')";
            $result = mysqli_query($conn, $sql);

            header("Refresh: 0;"); 
        }
    ?>
    
    <div class="middle">
        <div class="content">
            <form action="create.php" method="post" id="frmLogin">
                <?php
                if($role==100){ ?>
                    <br><br><h2>Skapa användare</h2>
                    <input type="text" name="username" placeholder="Användarnamn">
                    <input type="text" name="password" placeholder="Lösenord">
                    <select name="role">
                        <option value="100">Admin</option>
                        <option value="10">Underarbetare</option>
                    </select>
                    <input type="submit" name="btnCreateUser" id="btnLogout" value="Skapa användare">
            </form>    <?php
                }   ?>
        </div>
    </div>
</body>
</html>