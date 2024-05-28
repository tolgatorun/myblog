<?php
    session_start();      
    $con = mysqli_connect("localhost","myblog","12345","myblog");
    
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
    }
    $username = $_POST['username'];  
    $password = $_POST['password'];
    
        $sql = "select * from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
          
        if($count == 1){
            $user_id = mysqli_query($con, "select id from users where username = '$username'");
            $user_id = mysqli_fetch_row($user_id);
            $_SESSION['loggedin'] = true; 
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $user_id[0];
            header("Location: main.php");
            exit;
           // echo "<h1><center> Login successful </center></h1>";
        } 
        else{  
            header("Location: login.html");
            exit;
        }     
?>  