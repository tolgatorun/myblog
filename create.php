
  <?php
    session_start();
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        ;
    } else {
        header("Location: login.html");
            exit;
    }
    // Check connection
    $con = mysqli_connect("localhost","myblog","12345","myblog");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    if(empty($_POST["post_title"]) or empty($_POST["post_text"])) {
        header("Location: create_error.html");
        exit;
    }
    else {
        mysqli_autocommit($con,FALSE);
        mysqli_query($con,"INSERT INTO Posts(title, text, id) VALUES ('".$_POST["post_title"]."', '".$_POST["post_text"]."', '".$_SESSION["id"]."')");
        if (!mysqli_commit($con)) {
            echo "Commit transaction failed";
            exit();
          }
          
          // Close connection
          mysqli_close($con);
          header("Location: main.php");
          exit;
    }
    ?>

