<!DOCTYPE html>
<html>
    <head>
        <title>Student Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link href="student_login.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/IISERB_Logo.png" type="image/gif">
    </head>
    <body>
        <div class="container login-logo">
            <div class="row">
                <div class="col-md-12">
                    <a href="website.php"><img src="images/logo.png" class="img-responsive" title="IISERB" alt="IISERB Logo"/></a>
                </div>
            </div>
        </div>
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login for Old Students</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Login for New Students</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container login-copyright">
            <p class="mt-5 mb-3 text-muted">Copyright &copy; 2019 Indian Institute of Science Education and Research Bhopal. All rights reserved. Designed by Sarthak Mishra @_nusart_
            </p>            
        </div>
    </body>
</html>