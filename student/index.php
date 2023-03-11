<?php 
require '../conn.php';
session_start();

if(!isset($_SESSION['user_name'])){
    header('location:../index.php');
 }
include '../incUser/header.php';
?>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img id="logo"src="../img/logo.png" alt="">
            </div>
            <div class="list-group list-group-flush my-2 mx-lg-1">
                <a href="index.php" class="list-group-item list-group-item-action second-text active "><i class="fa-duotone fa-house me-2"></i>Dashboard</a>
                <!-- <a href="aircraft.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-plane-up me-2"></i>Aircraft</a>
                <a href="instructor.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-user-pilot-tie me-2"></i>Pilot Instructor</a> -->
                <a href="calendar.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-calendar-days me-2"></i>Calendar</a>
                <a href="schedule.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-calendar-lines-pen me-2"></i>Schedule</a>
                <a href="../logout.php" class="list-group-item list-group-item-action second-text "><i class="fa-duotone fa-right-from-bracket me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
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
                            <a><i class="fas fa-user me-2"></i>Hi , <?php echo $_SESSION['user_name'] ?></a>
                    </ul>
                </div>
            </nav>
<!-- MAIN -->
<div class="container-fluid px-4">

<div class="row g-3 my-2">
        <!-- <div class="col">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                <?php 
                        include '../conn.php';
                        $total = "SELECT * FROM schedule";
                        $total_query = mysqli_query($conn,$total);
                        

                        if($schedule = mysqli_num_rows($total_query)){
                            echo '<h3 class="fs-2">'.$schedule.'</h3>';
                        }else{
                            echo '<h3 class="fs-2">No</h3>';
                        }
                        ?>
                    <p class="fs-5">Scheduled</p>
                    <a href="./schedule.php" style="text-decoration:none;font-size:12px;">View Details</a>

                </div>
                <i class="fa-duotone fa-calendar-lines-pen primary-text rounded-full secondary-bg fs-1 p-3"></i>
            </div>
        </div> -->

        <!-- <div class="col-lg-4 col-md-6">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                <?php 
                        include '../conn.php';
                        $total = "SELECT * FROM instructor";
                        $total_query = mysqli_query($conn,$total);
                        

                        if($instructor = mysqli_num_rows($total_query)){
                            echo '<h3 class="fs-2">'.$instructor.'</h3>';
                        }else{
                            echo '<h3 class="fs-2">No</h3>';
                        }
                        ?>
                    <p class="fs-5">Instructor</p>
                    <a href="./instructor.php" style="text-decoration:none;font-size:12px;">View Details</a>
                </div>
                <i class="fa-duotone fa-user-pilot primary-text rounded-full secondary-bg fs-1 p-3"></i>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                <?php 
                        include '../conn.php';
                        $total = "SELECT * FROM aircraft";
                        $total_query = mysqli_query($conn,$total);
                        

                        if($aircraft = mysqli_num_rows($total_query)){
                            echo '<h3 class="fs-2">'.$aircraft.'</h3>';
                        }else{
                            echo '<h3 class="fs-2">No</h3>';
                        }
                        ?>
                    <p class="fs-5">Aircraft</p>
                    <a href="./aircraft.php" style="text-decoration:none;font-size:12px;">View Details</a>
                </div>
                <i class="fa-duotone fa-plane-up primary-text rounded-full secondary-bg fs-1 p-3 "></i>
            </div>
        </div>
    </div> -->
    
    <div class="row my-5">
        <div class="col-lg-9">
        <h3 class="fs-4 mb-3">Weather Map</h3>
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div class="card-body">
                    <div id="windy"></div>
                </div>
            </div>
        </div>


        <div class="col-lg-3">
        <h4 class="fs-4 mb-3">Weather Status</h4>
        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">


        <div class="card-body">
                <?php 
                
                $apiKey = "e8063c2154424d8351103d6881a6d090";
                $lat = "15.326093";
                $lon = "119.968928";
                $googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?lat=" . $lat . "&lon=".$lon."&lang=en&units=metric&APPID=" .$apiKey;
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                curl_setopt($ch, CURLOPT_VERBOSE, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($ch);

                curl_close($ch);
                $data = json_decode($response);
                $currentTime = time();
                ?>
                <h1><?php echo $data->name; ?>, Zambales</h1>
                
                <div id="clockdate">
                    <div class="d-flex justify-content-evenly clockdate-wrapper ">
                        <div id="clock"></div>
                        <div id="date"></div>
                    </div>
                </div>
                
                <center>
                    <div class="report-container mt-1">
                        <h4><?php echo ucwords($data->weather[0]->description); ?></h4>
                    </div>
                    
                    <div class="weather-forecast">
                        <img class="weather-icon"
                        src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"><br>
                        <h1>Temp: <?php echo floor($data->main->temp); ?>°C</h1>
                    </div>
                    
                    <!-- <div class="time"> -->
                        <div class="d-flex justify-content-between time mt-3">
                            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                            <div>Wind: <?php echo $data->wind->speed; ?>km/h</div>
                        </div>
                        
                        <div class="d-flex justify-content-between time mt-3">
                            <div>Wind Degree: <?php echo $data->wind->deg; ?>°</div>
                            <div>Wind Gusts: <?php echo $data->wind->gust; ?>km/h</div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <center>
            <p class="text-dark">&copy; Copyright Reserved. PRMSU BSCS-2023</p>
        </center>
    </footer>
</div>
</div>
</div>

</div>

</div>
<!-- END MAIN -->
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

<?php 
include '../incUser/footer.php';
?>