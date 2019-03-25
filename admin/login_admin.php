<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <title>Login</title>
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap/js/bootstrap.min.js" ></script>
    <script src="bootstrap/js/jquery.min.js" ></script>

    <style type="text/css">
       body {
           background-color :#8a8a8a
       }
      p.register {
          color:#ffffff
      }
     
    </style>
  
</head>
<body>
    <div class="container-fluid text-white">
    
    <div class="row">
    <div class="col-md-4"></div>
     <div class="col-md-4">
<form action="check_login.php" method="POST" name="check_log_in">
  <div class="form-group">
    <h4>Login</h4>
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="ch_user_id" name="ch_user_id"  placeholder="Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="ch_password" name="ch_password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember</label>
  </div>
 
  <button type="submit" class="btn btn-outline-dark">Login</button>
  
</form>

    </div>

    <div class="col-md-4"></div>
    
    </div>

    </div>

  <div class="container-fluid con">
  <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
       <div class="form-group text-right">
          <button type="submit" class="btn btn-sm">
         <a href="register.php?page=register"><p class="register">Register</p></a>
          </button>
         
      </div>
       </div>
       <div class="col-md-4"></div>
  </div>
  
  </div>

   
        <!-- Container -->
	<?php 
    switch ($_GET['page']) {
    case 'register':
        echo '';
        include 'register.php';
        break;
    case 'login_admin':
        echo '';
        include 'alert/alert_register.php';
        break;
    default:
        echo '';
        include '';
    }
    ?>
     
</body>
</html>