<?php require "includes/header.php"; ?>
<?php require "config.php";?>
<?php




if (isset($_POST['submit'])){
if ($_POST['email']==' '  or $_POST['password']==' '){
  echo "Some inputs are empty";
}else {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $login =$conn->query("SELECT * FROM users WHERE email='$email'");

  $login->execute();

  $data= $login->fetch(PDO::FETCH_ASSOC);



  if ($login->rowCount()>0){
    if (password_verify($password,$data['mypassword'])){

 // $_SESSION['username'] = $data['username'];
//     $_SESSION['email'] = $data['email'];
//    header("location : index.php");
      echo "loged in";

    }else{
      echo "email or password is wrong";
    }


  }else{
    echo "email or password is wrong";
  }


}
}




?>

<main class="form-signin w-50 m-auto">
  <form method="post" action="login.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center">Please login in</h1>

    <div class="form-floating">
      <label for="floatingInput">Email address</label>
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">

    </div>
   <br>
    <div class="form-floating">
      <label for="floatingPassword">Password</label>
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">

    </div>
    <br>
    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <h6 class="mt-3">Don't have an account  <a href="register.php">Create your account</a></h6>
  </form>
</main>
<?php require "includes/footer.php"; ?>
