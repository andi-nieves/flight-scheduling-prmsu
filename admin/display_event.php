<?php                
require '../conn.php'; 
$display_query = "select event_id,date_filling,orginator,event_name,flight_crew,passenger,pilot_command,person_board,cruising_speed,level,route,destination_aerodome,event_start_date,start_time,end_time from calendar";             
$results = mysqli_query($conn,$display_query);   
$count = mysqli_num_rows($results);  
if($count>0) 
{
	$data_arr=array();
    $i=1;
	while($data_row = mysqli_fetch_array($results, MYSQLI_ASSOC))
	{	
	$data_arr[$i]['event_id'] = $data_row['event_id'];
	$data_arr[$i]['date'] = $data_row['date_filling'];
	$data_arr[$i]['orginator'] = $data_row['orginator'];
	$data_arr[$i]['title'] = $data_row['event_name'];//aircraft
	$data_arr[$i]['flight'] = $data_row['flight_crew'];
	$data_arr[$i]['passenger'] = $data_row['passenger'];
	$data_arr[$i]['pilot'] = $data_row['pilot_command'];
	$data_arr[$i]['person'] = $data_row['person_board'];
	$data_arr[$i]['cruising'] = $data_row['cruising_speed'];
	$data_arr[$i]['level'] = $data_row['level'];
	$data_arr[$i]['route'] = $data_row['route'];
	$data_arr[$i]['destination'] = $data_row['destination_aerodome'];

	$data_arr[$i]['start'] = ($data_row['event_start_date']);
	$data_arr[$i]['stime'] = ($data_row['start_time']);
	$data_arr[$i]['etime'] = ($data_row['end_time']);
	// $data_arr[$i]['color'] = '#'.substr(uniqid(),-6); // 'green'; pass colour name
	// $data_arr[$i]['url'] = '';
	$i++;
	}
	
	$data = array(
                'status' => true,
                'msg' => 'successfully!',
				'data' => $data_arr
            );
}
else
{
	$data = array(
                'status' => false,
                'msg' => 'Error!'				
            );
}
echo json_encode($data);
?>