<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css"> 
    <script src="main.js"></script>
</head>
<body>

<div class="container">
   
   <form action="insert_employee.php" method="" name="fr_employee">
   <div class="row">
      <div class="col-md-2">
      <div class="form-group ">
        <label for="">Employee ID</label>
        <input type="text" name="emplo_id" class="form-control" placeholder="Employee ID">
      </div>
     
      </div>
   </div>

    <div class="row">
        <div class="col-md-2">
        <div class="form-group">
          <label for="sel1">Select</label>
          <select class="form-control" id="now_en" name="now_en">
            <option>MR.</option>
            <option>MISS.</option>
            <option>MRS.</option>
            <option>Other</option>
          </select>
        </div>
        </div>
        <div class="col-md-5">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="name_eng" name="name_eng" placeholder="Name">
        </div>
        <div class="col-md-5">
        <label for="exampleInputEmail1">LastName</label>
        <input type="text" class="form-control" id="lastname_eng" name="lastname_eng" placeholder="LastName">
        </div>
    </div>

    <div class="row">
    <div class="col-md-2">
    <div class="form-group">
          <label for="sel1">Select</label>
          <select class="form-control" id="now_th" name="now_th">
            <option>นาย</option>
            <option>นางสาว</option>
            <option>นาง</option>
            <option>อื่นๆ</option>
          </select>
        </div>
    </div>
    <div class="col-md-5">
        <label for="exampleInputEmail1">ชื่อ</label>
        <input type="text" class="form-control" id="name_th" name="name_th" placeholder="ชื่อ">
        </div>
        <div class="col-md-5">
        <label for="exampleInputEmail1">นามสกุล</label>
        <input type="text" class="form-control" id="lastname_th" name="lastname_th" placeholder="นามสกุล">
        </div>
    </div>

    <div class="row">
          <div class="col-md-6">
          <label for="exampleInputEmail1">Position</label>
        <input type="text" class="form-control" id="position" name="position" placeholder="Position">
          </div>
          <div class="col-md-6">
          <label for="exampleInputEmail1">Email</label>
        <input type="Email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
    </div>

    <div class="row mb-2">
        
            <div class="col-md-6">
            <label for="sel1">Section</label>
          <select class="form-control" id="section" name="section">
            <option>IT</option>
            <option>HR</option>
            <option>ACC</option>
            <option>Piping</option>
          </select>
            </div>

            <div class="col-md-6">
            <label for="sel1">Department</label>
          <select class="form-control" id="department" name="department">
            <option>IT</option>
            <option>HR</option>
            <option>Production</option>
            <option>QAQC</option>
          </select>
            </div>   
    </div>

    <div class="row">
          <div class="col-md-12">
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>
    </div>
   </form> 

</div>

</body>
</html>