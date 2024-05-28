<!DOCTYPE html>
<html>
<head>
    <title>Form Processed</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("Location: main.html");
    }
    $con = mysqli_connect("localhost","myblog","12345","myblog");
    
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    else { echo "Connection success";}
    mysqli_autocommit($con,FALSE);
    mysqli_query($con,"INSERT INTO Users(username, password) VALUES ('".$_POST["username"]."', '".$_POST["password"]."')");
    if (!mysqli_commit($con)) {
        echo "Commit transaction failed";
        exit();
      }
      
      // Close connection
      mysqli_close($con);
    ?>
</body>
</html>
