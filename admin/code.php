<?php 
require '../conn.php';
// AIRCRAFT
if(isset($_POST['delete_aircraft']))
{
    $aircraft_id = mysqli_real_escape_string($conn, $_POST['aircraft_id']);

    $query = "DELETE FROM aircraft WHERE id='$aircraft_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Aircraft Deleted Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Aircraft not deleted!'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['updateAircraft']))
{
    $aircraft_id = mysqli_real_escape_string($conn, $_POST['aircraft_id']);
    $aircraft = mysqli_real_escape_string($conn, $_POST['aircraft']);
    $registration = mysqli_real_escape_string($conn, $_POST['registration']);
    $engine = mysqli_real_escape_string($conn, $_POST['engine']);
    $seater = mysqli_real_escape_string($conn, $_POST['seater']);
    $flyable = mysqli_real_escape_string($conn, $_POST['flyable']);
    $checking = mysqli_real_escape_string($conn, $_POST['checking']);

    if($aircraft == NULL || $registration == NULL || $engine == NULL || $seater == NULL || $flyable == NULL || $checking == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }

    $query = "UPDATE aircraft SET aircraft='$aircraft',registration='$registration',engine='$engine',seater='$seater',flyable='$flyable',checking='$checking' WHERE id='$aircraft_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Aircraft Updated Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Aircraft not updated!'
        ];
        echo json_encode($res);
        return false;  
    }
}

if(isset($_GET['aircraft_id']))
{
    $aircraft_id = mysqli_real_escape_string($conn,$_GET['aircraft_id']);

    $query = "SELECT * FROM aircraft WHERE id='$aircraft_id'";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $aircraft_id = mysqli_fetch_array($query_run);
        $res = [
            'status' => 200,
            'message' => 'Aircraft fetch Successfully!',
            'data' => $aircraft_id
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Aircraft ID not found'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['addAircraft']))
{
    $aircraft = mysqli_real_escape_string($conn, $_POST['aircraft']);
    $registration = mysqli_real_escape_string($conn, $_POST['registration']);
    $engine = mysqli_real_escape_string($conn, $_POST['engine']);
    $seater = mysqli_real_escape_string($conn, $_POST['seater']);
    $flyable = mysqli_real_escape_string($conn, $_POST['flyable']);
    $checking = mysqli_real_escape_string($conn, $_POST['checking']);

    if($aircraft == NULL || $registration == NULL || $engine == NULL || $seater == NULL || $flyable == NULL || $checking == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }

    $query = "INSERT INTO aircraft (aircraft,registration,engine,seater,flyable,checking) values ('$aircraft','$registration','$engine','$seater','$flyable','$checking')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Aircraft Added Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Aircraft not added!'
        ];
        echo json_encode($res);
        return false;  
    }
} 
// AIRCRAFT


// INSTRUCTOR
if(isset($_GET['instructor_id']))
{
    $instructor_id = mysqli_real_escape_string($conn,$_GET['instructor_id']);

    $query = "SELECT * FROM instructor WHERE id='$instructor_id'";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $instructor_id = mysqli_fetch_array($query_run);
        $res = [
            'status' => 200,
            'message' => 'Instructor fetch Successfully!',
            'data' => $instructor_id
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Instructor ID not found'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['addInstructor']))
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $license = mysqli_real_escape_string($conn, $_POST['license']);


    if($fname == NULL || $lname == NULL || $contact == NULL || $gender == NULL || $address == NULL || $email == NULL || $license == Null)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }

    $query = "INSERT INTO instructor (firstname,lastname,contact,gender,address,email,license) VALUES ('$fname','$lname','$contact','$gender','$address','$email','$license')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Instructor Added Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Instructor not added!'
        ];
        echo json_encode($res);
        return false;  
    }
}

if(isset($_POST['updateInstructor']))
{
    $instructor_id = mysqli_real_escape_string($conn, $_POST['instructor_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $license = mysqli_real_escape_string($conn, $_POST['license']);

    if($fname == NULL || $lname == NULL || $contact == NULL || $gender == NULL || $address == NULL || $email == NULL|| $license == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }

    $query = "UPDATE instructor SET firstname='$fname',lastname='$lname',contact='$contact',gender='$gender',address='$address',email='$email',license='$license' WHERE id='$instructor_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Instructor Updated Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Instructor not updated!'
        ];
        echo json_encode($res);
        return false;  
    }
}
if(isset($_POST['delete_instructor']))
{
    $instructor_id = mysqli_real_escape_string($conn, $_POST['instructor_id']);

    $query = "DELETE FROM instructor WHERE id='$instructor_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Instructor Deleted Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Instructor not deleted!'
        ];
        echo json_encode($res);
        return false;
    }
}
// INSTRUCTOR

// STUDENT
if(isset($_GET['student_id']))
{
    $student_id = mysqli_real_escape_string($conn,$_GET['student_id']);

    $query = "SELECT * FROM student WHERE id='$student_id'";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student_id = mysqli_fetch_array($query_run);
        $res = [
            'status' => 200,
            'message' => 'Student fetch Successfully!',
            'data' => $student_id
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Student ID not found'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST['addStudent']))
{
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $license = mysqli_real_escape_string($conn, $_POST['license']);


    if($fname == NULL || $lname == NULL || $contact == NULL || $gender == NULL || $address == NULL || $email == NULL || $license == Null)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }

    $query = "INSERT INTO student (firstname,lastname,contact,gender,address,email,license) VALUES ('$fname','$lname','$contact','$gender','$address','$email','$license')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Added Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student not added!'
        ];
        echo json_encode($res);
        return false;  
    }
}

if(isset($_POST['updateStudent']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $license = mysqli_real_escape_string($conn, $_POST['license']);

    if($fname == NULL || $lname == NULL || $contact == NULL || $gender == NULL || $address == NULL || $email == NULL|| $license == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }

    $query = "UPDATE student SET firstname='$fname',lastname='$lname',contact='$contact',gender='$gender',address='$address',email='$email',license='$license' WHERE id='$student_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Updated Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student not updated!'
        ];
        echo json_encode($res);
        return false;  
    }
}

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);

    $query = "DELETE FROM student WHERE id='$student_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Deleted Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student not deleted!'
        ];
        echo json_encode($res);
        return false;
    }
}
// STUDENT

// ACCOUNT
if(isset($_GET['user_id']))
{
    $user_id = mysqli_real_escape_string($conn,$_GET['user_id']);

    $query = "SELECT * FROM users WHERE id='$user_id'";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $user_id = mysqli_fetch_array($query_run);
        $res = [
            'status' => 200,
            'message' => 'Account fetch Successfully!',
            'data' => $user_id
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Account ID not found'
        ];
        echo json_encode($res);
        return false;
    }
}
if(isset($_POST['delete_user']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    $query = "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Account Deleted Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Account not deleted!'
        ];
        echo json_encode($res);
        return false;
    }
}

if(isset($_POST["addAccount"])){
    $fname =$_POST["fname"];
    $lname =$_POST["lname"];
    $email =$_POST["email"];
    $pass =$_POST["password"];
    $cpass =$_POST["cpassword"];
    $number =$_POST["contact"];
    $usertype =$_POST["usertype"];
  
    if($fname == NULL || $lname == NULL || $email == NULL || $pass == NULL || $cpass == NULL || $number == NULL|| $usertype == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }
    $double = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($double) >0 ){
        // echo "<script>alert('This email already exist!');</script>";
        $res = [
            'status' => 422,
            'message' => 'This email already exist!'
        ];
        echo json_encode($res);
        return false;
    }else{
        if($pass== $cpass){
            $result = "INSERT INTO users (firstname,lastname,email,password,contact,usertype) VALUES ('$fname','$lname','$email','$pass','$number','$usertype')";
  
            mysqli_query($conn,$result);
            $res = [
                'status' => 200,
                'message' => 'Account Added Successfully!'
            ];
            echo json_encode($res);
            return false;
            // echo "<script>alert('Register Successfully!');</script>";
            // header('location:index.php');
        }else{
            $res = [
                'status' => 500,
                'message' => 'Password does not match!'
            ];
            echo json_encode($res);
            return false;
            // echo "<script>alert('Password does not match');</script>";
        }
    }
  }

  if(isset($_POST['updateAccount']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $usertype = $_POST['usertype'];

    if($fname == NULL || $lname == NULL || $email == NULL || $contact == NULL || $password == NULL || $cpassword == NULL|| $usertype == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields required!'
        ];
        echo json_encode($res);
        return false;
    }

    $query = "UPDATE users SET firstname='$fname',lastname='$lname',email='$email',contact='$contact',password='$password',password='$cpassword',usertype='$usertype' WHERE id='$user_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Account Updated Successfully!'
        ];
        echo json_encode($res);
        return false;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Account not updated!'
        ];
        echo json_encode($res);
        return false;  
    }
}

// ACCOUNT
?>