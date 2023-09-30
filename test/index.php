<?php
    //Connection
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  

    
    <title>toinks</title>
</head>
<body>

<form class="row g-3" action ="index.php" method = "post" >
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">First Name</label>
        <input type="text" class="form-control" name = "name">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Last Name</label>
        <input type="text" class="form-control" name = "lname">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="text" class="form-control" name = "email">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Gender</label>
        <input type="text" class="form-control" name = "gender">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Birthdate</label>
        <input type="date" class="form-control" name = "bdate">
    </div>

    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Address</label>
        <input type="text" class="form-control" name = "address">
    </div>
   
    <div class="col-12">
        <button type="submit" name ="submit" class="btn btn-primary">Sign in</button>
    </div>
</form>

<table class="table table-striped-columns">
    
</table>
 </div>

 <table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
    // Add row to table
    include 'addtable.php';
  ?>

  </tbody>
</table>

</body>
</html>



<?php
//Insert Files
include 'connection.php';

include 'insert.php';
?>
 


