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
        <div class="content">
        <!-- If someone tries to log in -->
        <?php
            if(isset($_POST['btnLogin'])){
                $username = $_POST['username']; //Gotta make variable for the SQL
                $password = md5($_POST['password']);
                $strQuery = "SELECT * FROM tblusers WHERE username='$username' AND password='$password';";  
                if($result=mysqli_query($conn,$strQuery)){ //Was it possible to question the database for this?
                    if(!mysqli_num_rows($result)==1){   //It was, now check if it didn't was just one row
                    ?>
                        <div class="formbox">
                            <h1>Inte inloggad!<br></h1>
                            <button onclick="location.href='login.php'">Försök igen</button>
                        </div>
                    <?php
                    $_SESSION['id']="0";
                    $_SESSION['role']= "";
                    $_SESSION['username']="";                 
                    }else{  //You made it! you are authorized!
                        $raden=mysqli_fetch_assoc($result);   //Get the row with data
                        echo "<h1>Välkommen, ".($raden['username'])."</h1>"; //use this to print name
                        $_SESSION['id']=$raden['id'];
                        $_SESSION['role']=$raden['role'];
                        $_SESSION['username']=$raden['username'];
                        //$skrivutvariabeln=$_SESSION['name'];
                        if(intval($_SESSION['role'])==100){
                            echo "<h1><br><br>Hej, admin!</h1>";
                            ?><br><br> <button onclick="location.href='index.php'">Gå till hem</button><?php
                        }else{
                            ?><br><br> <button onclick="location.href='login.php'">Gå till hem</button><?php
                        }
                    }
                }   
            }else{  //else Show form   ?>
            <div class="formbox">
                <form action="login.php" method="post" id="frmLogin">
                    <input type="text" name="username" id="username" placeholder="Username">
                    <input type="password" name="password" id="password" placeholder="password"><br>
                    <input type="submit" name="btnLogin" id="btnLogin" value="Login">
                </form>
            </div>
            <?php }   //Who dis? New phone ?>
        </div>   
    </div>

    
</body>
</html>