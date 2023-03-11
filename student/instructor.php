<?php 
require '../conn.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:../index.php');
 }

include '../incUser/header.php';
?>
    <div class="d-flex" id="wrapper"><!--start d-flex wrapper-->
        
        <div class="bg-white" id="sidebar-wrapper"><!-- Sidebar -->
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img id="logo"src="../img/logo.png" alt="">
            </div>
            <div class="list-group list-group-flush my-2 mx-lg-1">
                <a href="index.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-house me-2"></i>Dashboard</a>
                <a href="aircraft.php" class="list-group-item list-group-item-action second-text  "><i class="fa-duotone fa-plane-up me-2"></i>Aircraft</a>
                <a href="instructor.php" class="list-group-item list-group-item-action second-text active"><i class="fa-duotone fa-user-pilot-tie me-2"></i>Pilot Instructor</a>
                <a href="calendar.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-calendar-days me-2"></i>Calendar</a>
                <a href="schedule.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-calendar-lines-pen me-2"></i>Schedule</a>
                <a href="../logout.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-right-from-bracket me-2"></i>Logout</a>
            </div>
        </div><!-- END sidebar-wrapper -->

        <div id="page-content-wrapper"><!-- Page Content -->
            <nav class="navbar navbar-expand navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <!-- <h2 class="fs-2 m-0">ALL ASIA AVIATION ACADEMY FLIGHT SCHEDULING</h2> -->
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                            <a><i class="fas fa-user me-2"></i>Hi, <?php echo $_SESSION['user_name'] ?></a>
                    </ul>
                </div>
            </nav>


            <!--  -->
<div class="table-responsive mx-3 bg-light py-3 rounded-3 vh-100">
        <center>
            <h4>INSTRUCTOR LIST</h4>
        </center>
        <hr>
        <div class="card mx-2">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="13%">First name</th>
                    <th width="13%">Last name</th>
                    <th width="10%">Contact number</th>
                    <th width="8%">Gender</th>
                    <th width="8%">Address</th>
                    <th width="10%">Email</th>
                    <!-- <th width="10%">License Expiration</th> -->
                </tr>
            </thead>
            <tbody>
                <?php 
                require '../conn.php';
                $query = "SELECT * FROM instructor";
                $query_run = mysqli_query($conn, $query);
                
                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $instructor)
                    {
                        ?>
                        <tr>
                            <td data-label="First name"><?= $instructor['firstname'] ?></td>
                            <td data-label="Last name"><?= $instructor['lastname'] ?></td>
                            <td data-label="Contact number"><?= $instructor['contact'] ?></td>
                            <td data-label="Gender"><?= $instructor['gender'] ?></td>
                            <td data-label="Address"><?= $instructor['address'] ?></td>
                            <td data-label="Email"><?= $instructor['email'] ?></td>
                            <!-- <td data-label="License Expiration"><?= $instructor['license'] ?></td> -->
  
                        </tr>
                        <?php
                        }
                    }
                    ?>
                    </tbody>
                </table> 
        </div>
            </div>
<!--  -->

            <div class="container-fluid px-4"><!-- MAIN -->
                <footer>
                    <center>
                        <p class="text-dark">&copy; Copyright Reserved. PRMSU BSCS-2023</p>
                    </center>
                </footer>
            </div><!-- END MAIN -->
        </div> <!-- END PAGE CONTENT WRAPPER -->
    </div> <!-- END d-flex wrapper -->
    <?php 
include '../incUser/footer.php';
?>