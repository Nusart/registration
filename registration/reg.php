<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Registration</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script> 
        <link href="reg.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="images/IISERB_Logo.png" type="image/gif">
    </head>
    <body>
        <br/><br/><a class="navbar-brand" href="website.php"><img src="images/logo.png" class="img-responsive" title="IISERB Logo"/></a>
        <form action="insert.php" method="post">
                        <h1 class="fields">Student Registration</h1>
                        <h2 class="fields">5 year BS-MS Dual Degree Programme (2019)</h2>
                        <h5 class="fields">(Fields marked with * are compulsory)</h5>
                        <fieldset>
                            <legend>Personal Details:</legend>
                                <table>
                                    <tr>
                                        <td><label>Student Full Name*</label></td>
                                        <td><input type="text" name="name"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Roll No*</label></td>
                                        <td><input type="text" name="roll"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Date Of Birth*</label></td>
                                        <td><input type="text" name="dob"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Gender*</label></td>
                                        <td><input type="text" name="gen"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Mobile Number*</label></td>
                                        <td><input type="text" name="phone"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Alternate Email ID*</label></td>
                                        <td><input type="text" name="email"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Permanent Address*</label></td>
                                        <td><textarea name="add" rows="5" cols="50" placeholder="Enter complete address"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label>Pincode*</label></td>
                                        <td><input type="text" name="pin"/></td>
                                    </tr>
                                </table>
                        </fieldset><br/>
                        <fieldset>
                            <legend>Father Details:</legend>
                                <table>
                                    <tr>
                                        <td><label>Father's Name*</label></td>
                                        <td><input type="text" name="fname"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Mobile Number*</label></td>
                                        <td><input type="text" name="fphone"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Email ID*</label></td>
                                        <td><input type="text" name="femail"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Occupation*</label></td>
                                        <td>
                                            <select name="focc">
                                              <option value="select" selected>Select</option>
                                              <option value="service">Service</option>
                                              <option value="business">Business</option>
                                              <option value="doctor">Doctor</option>
                                              <option value="engineer">Engineer</option>
                                              <option value="artist">Artist</option>
                                              <option value="lawyer">Lawyer</option>
                                              <option value="teacher">Teacher</option>
                                              <option value="architecture">Architecture</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Annual Income</label></td>
                                        <td><input type="text" name="finc"/></td>
                                    </tr>
                                </table>
                        </fieldset><br/>
                        <fieldset>
                            <legend>Mother Details:</legend>
                                <table>
                                    <tr>
                                        <td><label>Mother's Name*</label></td>
                                        <td><input type="text" name="mname"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Mobile Number*</label></td>
                                        <td><input type="text" name="mphone"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Alternate Email ID*</label></td>
                                        <td><input type="text" name="memail"/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Occupation*</label></td>
                                        <td>
                                            <select name="mocc">
                                              <option value="select" selected>Select</option>
                                              <option value="service">Service</option>
                                              <option value="business">Business</option>
                                              <option value="doctor">Doctor</option>
                                              <option value="engineer">Engineer</option>
                                              <option value="artist">Artist</option>
                                              <option value="lawyer">Lawyer</option>
                                              <option value="teacher">Teacher</option>
                                              <option value="architecture">Architecture</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label>Annual Income</label></td>
                                        <td><input type="text" name="minc"/></td>
                                    </tr>
                                </table>
                        </fieldset><br/><br/>
                        <div class="container-fluid">
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" id="btn">
                                Reset
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Reset</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      Resetting will render all fields empty.<br/>
                                      Do you wish to continue?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Yes</button>
                                  </div>
                                </div>
                              </div>
                            </div>&emsp;&emsp;
                            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal1">
                              Submit
                            </button>
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Submit</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      Are you sure you want to submit?
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-secondary">Yes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
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