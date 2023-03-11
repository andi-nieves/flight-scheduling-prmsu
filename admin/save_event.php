<?php                
require '../conn.php'; 
$date = $_POST['date_filling'];
$orginator = $_POST['orginator'];
$event_name = $_POST['event_name'];//aircraft
$flight_crew = $_POST['flight_crew'];
$passenger = $_POST['passenger'];
$pilot_command = $_POST['pilot_command'];
$person_board = $_POST['person_board'];
$cruising_speed = $_POST['cruising_speed'];
$level = $_POST['level'];
$route = $_POST['route'];
$destination_aerodome = $_POST['destination_aerodome'];
$event_start_date = $_POST['event_start_date']; //flight schedule
$start_time = $_POST['start_time']; //flight start
$end_time = $_POST['end_time']; //flight end
			
$insert_query = "insert into `calendar`(`date_filling`,`orginator`,`event_name`,`flight_crew`,`passenger`,`pilot_command`,`person_board`,`cruising_speed`,`level`,`route`,`destination_aerodome`,`event_start_date`,`start_time`,`end_time`) values ('".$date."','".$orginator."','".$event_name."','".$flight_crew."','".$passenger."','".$pilot_command."','".$person_board."','".$cruising_speed."','".$level."','".$route."','".$destination_aerodome."','".$event_start_date."','".$start_time."','".$end_time."')";             
if(mysqli_query($conn, $insert_query))
{
	$data = array(
                'status' => true,
                'msg' => 'Schedule added successfully!'
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Sorry, Schedule not added.'				
            );
}
echo json_encode($data);	
?>
