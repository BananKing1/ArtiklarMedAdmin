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
    
    <?php
        if(isset($_POST['btnCreateUser'])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $role = $_POST['role'];
    
            $sql = "INSERT INTO tblusers(username, role, password) VALUES ('$username','$password','$role')";
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