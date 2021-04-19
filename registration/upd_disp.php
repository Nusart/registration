<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link href="reg.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/IISERB_Logo.png" type="image/gif">
    </head>
    <body>
        <br/><br/><a class="navbar-brand" href="website.php"><img src="images/logo.png" class="img-responsive" title="IISERB Logo"/></a>
        <form action="update.php" method="post">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Roll No" name="roll">
                    </div>
                </div><br/>
                <label for="formGroupExampleInput"><h4>Update</h4></label>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select an entry you want to update-</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="update">
                        <option value="sel" selected>Select</option>
                        <option value="name">Student Name</option>
                        <option value="dob">Date Of Birth</option>
                        <option value="mob">Student Mobile Number</option>
                        <option value="email">Alternate Email ID</option>
                        <option value="addr">Permanent Address</option>
                        <option value="pin">Pincode</option>
                        <option value="fname">Father's Name</option>
                        <option value="fmob">Father's Mobile Number</option>
                        <option value="femail">Father's Email ID</option>
                        <option value="mname">Mother's Name</option>
                        <option value="mmob">Mother's Mobile Number</option>
                        <option value="memail">Mother's Email ID</option>
                     </select>
                </div>
                <input type="text" class="form-control" id="formGroupExampleInput" name="updated_value" placeholder="Please re-write the updated entry completely">
                <br/><button type="submit" class="btn btn-secondary">Update</button>
            </div>
        </form>
        <form action="display.php" method="post">
            <label for="exampleFormControlSelect1">Enter the <strong>Roll No</strong> whose data you want to <strong>display.</strong></label>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-3">
                        <br/><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Roll No" name="roll">
                    </div>
                </div>
            </div> 
            <br/><button type="submit" class="btn btn-secondary">Display</button>
        </form>
        <div class="footer">
          <div class="row">
              <div class="col-lg-9">
                Copyright © 2019 Indian Institute of Science Education and Research Bhopal. All rights reserved. Designed by Sarthak Mishra @_nusart_ 
              </div>
              <div class="col-lg-3">
                  <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.png"/></a>&nbsp;
                  <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="images/twitter.png"/></a>&nbsp;
                  <a href="https://in.linkedin.com/" target="_blank"><img src="images/linkedin.png"/></a>&nbsp;
                  <a href="https://www.youtube.com/" target="_blank"><img src="images/youtube.png"/></a>
              </div>
            </div>
        </div>
    </body>
</html>