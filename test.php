<?php session_start();

$host = "localhost";
    $user = "root";
    $pass = "";
    $db="ama";

    $conn=mysqli_connect($host, $user, $pass, $db);



    $conn = mysqli_connect($host, $user, $pass, $db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = " SELECT * FROM `tblarticle` WHERE 1 ";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='middle'>";
            echo "<div class='article'>";
            echo "<h1>" . htmlspecialchars($row['rubrik']) . "</h1>";
            echo "<h2>" . htmlspecialchars($row['ingress']) . "</h2>";
            echo "<p>Författare: " . htmlspecialchars($row['writer']) . "</p>";
            echo "</div>";
            echo "</div><hr>"; // Helps visualize multiple articles
        }
    } else {
        echo "No results found or query error.";
    }
    
    mysqli_close($conn);
?>


 