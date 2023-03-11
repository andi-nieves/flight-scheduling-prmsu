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

<!-- CLICK -->
<div class="modal fade" id="event_entry_modals" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabel">Schedule</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

			</div>
			<div class="modal-body">
				<div class="img-container">
					<div class="row">
                    <div class="col-lg-6 col-sm-12">  
							<div class="form-group">
							  <label for="date">Date</label>
							  <p type="date" name="dates" id="dates" class="form-control mb-2" placeholder="Date of Filling">
							</div>
						</div>
						<div class="col-lg-12 col-sm-12">  
							<div class="form-group">
							  <label for="orginator">Orginator</label>
							  <p type="text" name="orginator" id="orginators" class="form-control mb-2" placeholder="Enter Orginator">
							</div>
						</div>	
						<div class="col-lg-12 col-sm-12">  
							<div class="form-group">
                                <label for="event_name">Aircraft</label>
                                <p type="text" name="fname"id="view_1"class="form-control mb-4" id="inputfname"></p>
							</div>
						</div>
					</div>
					<div class="row">					
                        <div class="col-lg-6 col-sm-12">  
							<div class="form-group">
							  <label for="flight_crew">Flight Crew</label>
							  <p type="text" name="flight_crew" id="flight_crews" class="form-control mb-2" placeholder="Enter Flight Crew">
							</div>
						</div>
                        <div class="col-lg-6 col-sm-12">  
							<div class="form-group">
							  <label for="passenger">Passengers</label>
							  <p type="text" name="passenger" id="passengers" class="form-control mb-2" placeholder="Enter Passenger">
							</div>
						</div>
                        <div class="col-lg-6 col-sm-12">  
							<div class="form-group">
							  <label for="pilot_command">Pilot in Command</label>
							  <p type="text" name="pilot_command" id="pilot_commands" class="form-control mb-2" placeholder="Enter Pilot in Command">
							</div>
						</div>
                        <div class="col-lg-6 col-sm-12">  
							<div class="form-group">
							  <label for="person_board">Persons on Board</label>
							  <p type="text" name="person_board" id="person_boards" class="form-control mb-2" placeholder="Enter Persons on Board">
							</div>
						</div>
                        <div class="col-lg-4 col-sm-12">  
							<div class="form-group">
							  <label for="cruising_speed">Cruising Speed</label>
							  <p type="text" name="cruising_speed" id="cruising_speeds" class="form-control" placeholder="Enter Cruising Speed">
							</div>
						</div>
                        <div class="col-lg-4 col-sm-12">  
							<div class="form-group">
							  <label for="level">Level</label>
							  <p type="text" name="level" id="levels" class="form-control" placeholder="Enter Level">
							</div>
						</div>
                        <div class="col-lg-4 col-sm-12">  
							<div class="form-group">
							  <label for="route">Route</label>
							  <p type="text" name="route" id="routes" class="form-control mb-2" placeholder="Enter Route">
							</div>
						</div>
                        <div class="col-lg-12 col-sm-12">  
							<div class="form-group">
							  <label for="destination_aerodome">Destination Aerodome</label>
							  <p type="text" name="destination_aerodomes" id="destination_aerodomes" class="form-control mb-2" placeholder="Enter Destination Aerodome">
							</div>
						</div>
					</div>
					<div class="row">
                    <div class="col-lg-12">  
							<div class="form-group">
                                <label for="flight_date">Flight Schedule</label>
                                <p type="date" name="flight_date"id="flight_date"class="form-control mb-4"></p>
							 </div>
						</div>
                        <div class="col-lg-6 col-sm-12">  
							<div class="form-group">
                                <label for="Start">Flight Start</label>
                                <p type="date" name="Start"id="Start"class="form-control mb-4"></p>
							 </div>
						</div>
                        <div class="col-lg-6 col-sm-12">  
							<div class="form-group">
                                <label for="End">Flight End</label>
                                <p type="date" name="End"id="End"class="form-control mb-4"></p>
							 </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CLICK -->

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