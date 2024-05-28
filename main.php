<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>blog</title>
  <meta charset="utf-8">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">blog</a>
      </div>
  
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li id="home"><a href="main.php">HOME</a></li>
          <li id="create"><a href="create.html">CREATE</a></li>
          <li id="logout"><a href="logout.php">LOGOUT</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      $con = mysqli_connect("localhost","myblog","12345","myblog");
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit;
      }
    else { ;}
    mysqli_autocommit($con,FALSE);
    $posts = mysqli_query($con, "SELECT * FROM posts ORDER BY post_id DESC LIMIT 5;");
    }
    
    $posts = mysqli_fetch_all($posts);
    $title_0 =  $posts[0][1];
    $text_0 = $posts[0][2];
    $title_1 =  $posts[1][1];
    $text_1 =  $posts[1][2];
    $title_2 = $posts[2][1];
    $text_2 = $posts[2][2];
    $title_3 = $posts[2][1];
    $text_3 = $posts[2][2];
    $title_4 = $posts[2][1];
    $text_4 = $posts[2][2];
    echo "<ul>
    <li><h2>$title_0</h2><p>$text_0</p></li>
    <li><h2>$title_1</h2><p>$text_1</p></li>
    <li><h2>$title_2</h2><p>$text_2</p></li>
    <li><h2>$title_3</h2><p>$text_3</p></li>
    <li><h2>$title_4</h2><p>$text_4</p></li>
</ul>";
    ?>

  <div class="footer-padding"></div>
  <div class="footer">
    <p>dogantolgatorun,ayteksangun,duruturkaslan</p>
  </div>
</div>
  <body>
    <div class="container">
