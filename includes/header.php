<?php
 //session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Authentiaction System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="#">Authentiaction System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
      </li>
<?php // if (!isset($_SESSION['username'])) : ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
<?php //  else:  ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
     username
        </a>

        <ul class="dropdown-menu">
          <li><a class="dropdown-options" href="logout.php">Logout</a></li>
        </ul>
        <?php  //endif; ?>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container marketing">
</body>
</html>