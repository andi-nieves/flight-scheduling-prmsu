<?php 
require 'conn.php';
session_start();


if (isset($_POST['admin'])){
  $pass = $_POST['password'];
  if($pass!="Administrator"){
      // $error[] = 'Wrong password!';
      echo "<script>alert('Wrong password');</script>";
      
  }
  else{
      header('location:adminsignup.php');
  }
  };

  if (isset($_POST['instructor'])){
    $pass = $_POST['password'];
    if($pass!="Instructor"){
        // $error[] = 'Wrong password!';
        echo "<script>alert('Wrong password');</script>";
        
    }
    else{
        header('location:instructorsignup.php');
    }
    };


if (isset($_POST['submit']))
{
    $email = $_POST["email"];
    $password = $_POST["password"];
  $select = "SELECT * FROM users WHERE email = '$email' && password = '$password'";

  $result = mysqli_query ($conn, $select);
if (mysqli_num_rows($result) > 0)
{
  $row = mysqli_fetch_array($result);
  if ($row['usertype']=='admin')
  {
    $_SESSION['admin_name'] = $row['firstname'];
    header('location: admin');

  }elseif($row['usertype']=='user')
  {
    $_SESSION['user_name'] = $row['firstname'];
    header('location: student');
  }elseif($row['usertype']=='instructor')
  {
    $_SESSION['user_name'] = $row['firstname'];
    header('location: instructor');
  }
}else{
    echo "<script>alert('Wrong email or password');</script>";
//   $error[] = 'Incorrect email or password!';
}
};

if(isset($_POST["register"])){
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
<script type="text/javascript">
        function preback(){window.history.forward();}
        setTimeout("preback()",0);
        window.onunload=function(){null};
     </script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>

<body style="background-image:url('./img/fv_trainingfleets.jpg');background-repeat:no-repeat;background-size:cover;background-position: center;">
<form action=""method="post">

    <!-- pilot student register modal -->
    <div class="modal fade" id="student" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Student Pilot Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="text"name="firstname" class="form-control" id="floatingInput" placeholder="name@example.com"required>
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
        <select class="form-select form-select-lg mb-3"name="usertype"id="floatingInput" aria-label=".form-select-lg example"required>
            <option selected disabled>--Select Role type--</option>
            <option value="user">Student Pilot</option>
            <option disabled value="admin">Administrator (Contact the Administrator!)</option>
            <option disabled value="instructor">Instructor (Contact the Administrator!)</option>

        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit"name="register" class="btn btn-primary">Register</button>
      </div>
    </div>
  </div>
</div>
    <!-- end pilot student register modal -->

</form>
      <!-- admin input password modal -->
      <form action="" method="post">
        <div class="modal fade" id="adminpass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Administrator Security</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com" required>
              <label for="floatingInput">Password</label>
              </div>
            </div>
            
            <div class="modal-footer">
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="admin">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- end admin input password modal -->

          <!-- instructor input password modal -->
          <form action="" method="post">
        <div class="modal fade" id="instructorpass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Instructor Security</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com" required>
              <label for="floatingInput">Password</label>
              </div>
            </div>
            
            <div class="modal-footer">
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" name="instructor">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- end instructor input password modal -->
<div class="container">
<h2 class="text-center text-white"><b>ALL ASIA AVIATION ACADEMY</b> </h1>
<hr>
<span><h5 class="text-center text-white mb-3">Iba, Zambales, Philippines</h5></span>
    <form action=""method="post">
      <img class="img-fluid text-center mw-100 mb-5 px-5"src="./img/logo.png" alt="logo">
        <div class="form-group">
          
            <div class="form-floating mb-3">
                <input type="text" name="email"class="form-control rounded-0" id="floatingInput" placeholder="name@example.com"required>
                <label for="floatingInput">Email address</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="password"name="password" class="form-control" id="floatingInput" placeholder="name@example.com"required>
                <label for="floatingInput">Password</label>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit" name="submit">Login</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#select">Register</button>
        </div>
        <!-- <button type="button" class="btn btn-success"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Login</button> -->
        <!-- <button type="button" class="btn btn-success"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Register</button> -->
    </form>

    <!-- selection modal -->
    <div class="modal fade" id="select" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Choose role type</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#student">Student Pilot</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#adminpass">Administrator</button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#instructorpass">Instructor</button>

        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
    <!-- end selection modal -->
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>