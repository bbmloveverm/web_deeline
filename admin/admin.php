<html>
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <title>Manage Data</title>
</head>
<body>
<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>

<div class="container">
    <div class="row">
    <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary mb-2">
  <a class="navbar-brand" href="admin.php">Manage Data</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php?page=manpower">Manpower <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    
  </div>
</nav>

    </div>
    </div>
</div>
  


<div class="container">

    <div class="row">
      <div class="col-md-12">
        <!-- Container -->
	<?php 
    switch ($_GET['page']) {
    case 'manpower':
        echo '';
        include 'manpower.php';
        break;
    case 'section':
        echo '';
        include 'section.php';
        break;
    case 'department':
        echo '';
        include 'department.php';
        break;
    case 'employee':
        echo '';
        include 'employee.php';
        break;
    case 'contactus':
        echo 'Home -> Contact Us';
        include 'page_contactus.php';
        break;
    default:
        echo 'Home';
        include 'page_home.php';
    }
    ?>
      </div>
    </div>

</div>
  
  
</body>
</html>
