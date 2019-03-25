<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <title>Register</title>

    <style type="text/css">
       body {
           background-color :#8a8a8a
       }

    
    </style>
    
</head>
<body>
 <div class="container-fluid text-white">
    <form action="insert_register.php" name="register" method="POST">
    <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
            <div class="form-group">
                <h4>Register</h4>
                <label for="">Username</label>
                <input type="text" class="form-control" placeholder="Username" name="re_username">
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="re_pass">
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-outline-dark" id="">Register</button>
            </div>

       </div>
       <div class="col-md-4"></div>
    </div>
    </form>
 </div>   
</body>
</html>