<?php 
require 'conn.php';
session_start();
if(isset($_POST["submit"])){
    $fname =$_POST["firstname"];
    $lname =$_POST["lastname"];
    $email =$_POST["email"];
    $pass =$_POST["password"];
    $cpass =$_POST["cpassword"];
    $number =$_POST["contact"];
    $usertype =$_POST["usertype"];
  
    $double = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($double) >0 ){
        echo "<script>alert('This email already exist!');</script>";
    }else{
        if($pass== $cpass){
            $result = "INSERT INTO users (firstname,lastname,email,password,contact,usertype) VALUES ('$fname','$lname','$email','$pass','$number','$usertype')";
  
            mysqli_query($conn,$result);
            echo "<script>alert('Register Successfully!');</script>";
            header('location:index.php');
        }else{
            echo "<script>alert('Password does not match');</script>";
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">

<script>
	$(document).ready(function(){
		$("#admin").modal('show');
	});
</script>
</head>
<body>
<form action=""method="post">

    <!-- pilot student register modal -->
    <div class="modal fade" id="admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Administrator Account</h1>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="text" name="firstname"class="form-control" id="floatingInput" placeholder="name@example.com"required>
            <label for="floatingInput">First name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text"name="lastname" class="form-control" id="floatingInput" placeholder="name@example.com"required>
            <label for="floatingInput">Last name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email"name="email" class="form-control" id="floatingInput" placeholder="name@example.com"required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password"name="password" class="form-control" id="floatingInput" placeholder="name@example.com"required>
            <label for="floatingInput">Password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password"name="cpassword" class="form-control" id="floatingInput" placeholder="name@example.com"required>
            <label for="floatingInput">Confirm password</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text"name="contact" class="form-control" id="floatingInput" placeholder="name@example.com"required>
            <label for="floatingInput">Contact</label>
        </div>
        <select class="form-select form-select-lg mb-3"name="usertype"id="floatingInput" aria-label=".form-select-lg example">
            <option selected disabled>--Select Role type--</option>
            <option value="user">Student Pilot</option>
            <option value="admin">Administrator</option>
            <option value="instructor">Instructor</option>

        </select>
      </div>
      <div class="modal-footer">
        <a href="index.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
        <button type="submit" name="submit"class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>
    <!-- end pilot student register modal -->

</form>
</body>
</html> 