<!doctype html>
<html lang="en">
  <head>
    <title>New Student Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <link href="login.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" href="images/IISERB_Logo.png" type="image/gif">
  </head>
  <body class="text-center">
    <form class="form-signin" action="redirect_new.php" method="post">
      <a href="website.php"><img class="mb-4" src="images/IISERB_Logo.png" alt="IISERB Logo" width="150" height="150"></a>
      <h1 class="h3 mb-3 font-weight-normal">Sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">
          Copyright &copy; 2019 Indian Institute of Science Education and Research Bhopal.<br/>
          All rights reserved.<br/>
          Designed by Sarthak Mishra<br/>
          @_nusart_
      </p>
    </form>
  </body>
</html>
