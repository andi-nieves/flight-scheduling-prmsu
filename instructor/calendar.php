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
                <!-- <a href="aircraft.php" class="list-group-item list-group-item-action second-text  "><i class="fa-duotone fa-plane-up me-2"></i>Aircraft</a>
                <a href="instructor.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-user-pilot-tie me-2"></i>Pilot Instructor</a> -->
                <a href="calendar.php" class="list-group-item list-group-item-action second-text active"><i class="fa-duotone fa-calendar-days me-2"></i>Calendar</a>
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

            <div class="container-fluid px-4"><!-- MAIN -->

            <div class="container-fluid px-4"><!-- MAIN -->

<div class="card px-4 py-4">
<div id="calendar"></div>
</div>

<!-- Start popup dialog box -->
<div class="modal fade" id="event_entry_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="modalLabel">Add Schedule</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

</div>
<div class="modal-body">
    <div class="img-container">
        <div class="row">
            <div class="col-sm-12">  
                <div class="form-group">
                  <label for="event_name">Aircraft</label>
                  <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Enter your event name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">  
                <div class="form-group">
                  <label for="event_start_date">Flight Start</label>
                  <input type="datetime-local" name="event_start_date" id="event_start_date" class="form-control onlydatepicker" placeholder="Event start date">
                 </div>
            </div>
            <div class="col-sm-6">  
                <div class="form-group">
                  <label for="event_end_date">Flight End</label>
                  <input type="datetime-local" name="event_end_date" id="event_end_date" class="form-control" placeholder="Event end date">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary" onclick="save_event()">Submit</button>
</div>
</div>
</div>
</div>
<!-- End popup dialog box -->

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