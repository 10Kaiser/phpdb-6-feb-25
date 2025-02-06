<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $mobile=$_POST['phone'];
    $password=$_POST['pass'];

    $sql="insert into `crud` (Name,Email,Mobile,Password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "Data insertion successful";
    }else{
      die(mysqli_error($con));
    }
}
  

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD Operation</title>
  </head>
  <body>
<div class="container my-5">
<form method="post">

<div class="form-group">
    <label >Name</label>
    <input type="name" class="form-control" placeholder="Enter your name" name="name" autocomplete="off"> 
</div>
<div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter Email address" name="mail" autocomplete="off">
</div>
<div class="form-group">
    <label >Mobile No.</label>
    <input type="mobile" class="form-control" placeholder="Enter your phone no." name="phone" autocomplete="off">
</div>
<div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" placeholder="Enter passsword" name="pass" autocomplete="off">
</div>
 

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>


  </body>
</html>