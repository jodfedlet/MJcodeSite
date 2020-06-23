<?php
include 'adm-head.php';
include_once'../MJcode.php';

  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pswd = $_POST['password'];
    $mjcode = new MJcode();
    $mjcode->selectUser($email, $pswd);
  }

?>

        <div class="container-fluid bg">
        <div class="row">
          <div class="col md-4 col-sm-4 col-xs-12"></div>
          <div class="col md-4 col-sm-4 col-xs-12">
              <form id="log" action="" method="post" enctype="multipart/form-data">
              <h1 class="text-center">Log In</h1>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Enter your Username" name="email" required>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="Enter your Password" name="password" required>
                </div>
                <button class="btn btn-success btn-block" type="submit" name="login">Login</button>


              </form>
          </div>

        <div class="col md-4 col-sm-4 col-xs-12"></div>

        </div>
        </div>

