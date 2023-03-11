<?php 
include '../conn.php';
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:../index.php');
 }

include '../incAdmin/header.php';

?>
    <div class="d-flex" id="wrapper"><!--start d-flex wrapper-->
        
        <div class="bg-white" id="sidebar-wrapper"><!-- Sidebar -->
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img id="logo"src="../img/logo.png" alt="">
            </div>
            <div class="list-group list-group-flush my-2 mx-1">
                <a href="index.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-house me-2"></i>Dashboard</a>
                <a href="aircraft.php" class="list-group-item list-group-item-action second-text active "><i class="fa-duotone fa-plane-up me-2"></i>Aircraft</a>
                <a href="instructor.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-user-pilot-tie me-2"></i>Pilot Instructor</a>
                <a href="student.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-user-pilot me-2"></i>Pilot Student</a>
                <a href="calendar.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-calendar-days me-2"></i>Calendar</a>
                <a href="schedule.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-calendar-lines-pen me-2"></i>Schedule</a>
                <a href="account.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-users me-2"></i>Accounts</a>
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
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-light">
                            <a style="color:black;"><i class="fas fa-user me-2"></i>Hi, <?php echo $_SESSION['admin_name'] ?></a>
                    </ul>
                </div>
            </nav>
            <!--  -->
<?php 
include 'modal.php';
?>
    <div class="table-responsive mx-3 bg-light py-3 rounded-3 vh-100">
        <center>
            <h4>AIRCRAFT LIST</h4>
        </center>
        <hr>
        <button type="button" id="addAircraft" class="btn btn-primary mb-3 ms-2" data-bs-toggle="modal" data-bs-target="#aircraftModal"><i class="fa-duotone fa-plus"></i> Add Aircraft</button>
        <div class="card mx-2">
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th width="15%">Aircraft</th>
                    <th width="15%">Registration</th>
                    <th width="10%">Engine</th>
                    <th width="10%">Seater</th>
                    <th width="8%">Flyable</th>
                    <th width="8%">Checking</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                require '../conn.php';
                $query = "SELECT * FROM aircraft";
                $query_run = mysqli_query($conn, $query);
                
                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $aircraft)
                    {
                        ?>
                        <tr>
                            <td data-label="Aircraft"><?= $aircraft['aircraft'] ?></td>
                            <td data-label="Registration"><?= $aircraft['registration'] ?></td>
                            <td data-label="Engine"><?= $aircraft['engine'] ?></td>
                            <td data-label="Seater"><?= $aircraft['seater'] ?></td>
                            <td data-label="Flyable"><?= $aircraft['flyable'] ?></td>
                            <td data-label="Checking"><?= $aircraft['checking'] ?></td>
                            <td>
                                <center>
                                <button type="button" value="<?=$aircraft['id'];?>" class="viewAircraft btn btn-outline-info btn-sm"><i class="fa-duotone fa-eye mx-1"></i></button>
                                <button type="button" value="<?=$aircraft['id'];?>" class="editAircraft btn btn-outline-success btn-sm"><i class="fa-duotone fa-pen-to-square mx-1"></i></button>
                                <button type="button" value="<?=$aircraft['id'];?>" class="delAircraft btn btn-outline-danger btn-sm"><i class="fa-duotone fa-trash mx-1"></i></button>
                                </center>
                            </td>
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
                <footer>
                    <center>
                        <p class="text-dark">&copy; Copyright Reserved. PRMSU BSCS-2023</p>
                    </center>
                </footer>
            </div><!-- END MAIN -->
        </div> <!-- END PAGE CONTENT WRAPPER -->
    </div> <!-- END d-flex wrapper -->
    <?php 
include '../incAdmin/footer.php';
?>