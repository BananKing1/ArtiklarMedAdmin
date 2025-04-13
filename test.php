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

<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

    font-family: "Tienne", serif;
    font-weight: 400;
    font-style: normal;
}

body{
    background-color: #3D3B3C;
    display: flex;  flex-direction: column;
    align-items: center;
}

    .middle{
    position: relative;
    width: 80%; min-height: 95vh;
    background: #7F7979;
    display: flex;  flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2%;
}

.content{
    width: 80%; height: auto;
    padding: 2%;
    background: #C1BDB3;
    border-radius: .4rem;
    display: flex;  flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin-top: 2%;
}

input[type=text]{
    margin: 2%;
    width: 40%; 
    font-size: 20px;
    padding: 2%;
    border-radius: .4rem;
}

input[type=submit]{
    width: 80%;    padding: 2%;
    margin-left: auto;  margin-right: auto;
    background-color: #5F5B6B  ;
    border-radius: .4rem;
    font-size: 20px; 
    color: #E3F2FD;
    margin: 4%;
}
</style>

<body>
    <?php
    if(isset($_POST['btnCreateArticle'])){
            $rubrik = $_POST['rubrik'];
            $ingress = $_POST['ingress'];
            $writer = $_POST['writer'];
            $bread = $_POST['bread'];
    
            $sql = "INSERT INTO tblarticle(rubrik, ingress, writer, bread) VALUES ('$rubrik','$ingress','$writer','$bread')";
            $result = mysqli_query($conn, $sql);

            header("Refresh: 0;"); 
        }
    ?>
    
    <div class="middle">
        <div class="content">
            <form action="create.php" method="POST">
                <input type="text" name="rubtik" placeholder="Rubrik">
                <input type="text" name="writer" placeholder="Författare">
                <div class="bigbox">
                    <input type="text" name="ingress" placeholder="Ingress">
                    <input type="text" name="bread" placeholder="Brödtext">
                </div>
                <input type="submit" name="btnCreateArticle" value="Klar">
            </form>
        </div>

        <div class="content">
            <form action="create.php" method="POST">
                <input type="text" name="rubtik" placeholder="Rubrik">
                <input type="text" name="writer" placeholder="Författare">
                <div class="bigbox">
                    <input type="text" name="ingress" placeholder="Ingress">
                    <input type="text" name="bread" placeholder="Brödtext">
                </div>
                <input type="submit" name="btnCreateArticle" value="Klar">
            </form>
        </div>
    </div>
</body>
</html>