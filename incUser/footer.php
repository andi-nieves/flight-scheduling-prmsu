<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>    
<script src="../js/windyAPI.js"></script>
<script src="../js/weatherTime.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

<script>
    
$(document).ready(function() {
	display_events();
}); //end document.ready block

function display_events() {
	var events = new Array();
$.ajax({
    url: '../student/display_event.php',  
    dataType: 'json',
    success: function (response) {
         
    var result=response.data;
    $.each(result, function (i, item) {
    	events.push({
            event_id: result[i].event_id,
            date: result[i].date,
            orginator: result[i].orginator,

            title: result[i].title,//aircraft

            flight: result[i].flight,
            passenger: result[i].passenger,
            pilot: result[i].pilot,
            person: result[i].person,
            cruising: result[i].cruising,
            level: result[i].level,
            route: result[i].route,
            destination: result[i].destination,

            start: result[i].start,
            stime: result[i].stime,
            etime: result[i].etime,
            color: result[i].color,
            url: result[i].url
        }); 	
    })
    
	var calendar = $('#calendar').fullCalendar({
	    defaultView: 'month',
		 timeZone: 'local',
	    editable: true,
        selectable: true,
		selectHelper: true,
        select: function(start, end, current) {
				// alert(start);
				// alert(end);
				// $('#date').val(moment(current).format('MMMM DD, YYYY'));
				$('#date').val(moment(current).format('YYYY-MM-DD'));

				$('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
				// $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
				$('#event_entry_modal').modal('show');
			},
            
        events: events,
	    eventRender: function(event, element, view) { 
            element.bind('click', function() {
					// alert("Title: "+event.title);
                    $('#event_entry_modals').modal('show'); 
                    // $('#event_entry_modal .modal-body').text(event.title);  
                    // $('#event_entry_modal .modal-body').text(event.start);  
                    $('#dates').text(moment(event.date).format('MMMM DD, YYYY'));
                    $('#orginators').text(event.orginator);
                    $('#view_1').text(event.title);
                    $('#flight_crews').text(event.flight);
                    $('#passengers').text(event.passenger);
                    $('#pilot_commands').text(event.pilot);
                    $('#person_boards').text(event.person);
                    $('#cruising_speeds').text(event.cruising);
                    $('#levels').text(event.level);
                    $('#routes').text(event.route);
                    $('#destination_aerodomes').text(event.destination);

                    $('#flight_date').text(moment(event.start).format('dddd - MMMM DD, YYYY'));
                    $('#Start').text(event.stime);
                    $('#End').text(event.etime);


				});
    	}
		}); //end fullCalendar block	
	  },//end success block
	  error: function (xhr, status) {
	  alert(response.msg);
	  }
	});//end ajax block	
}


function save_event()
{
var date_filling=$("#date").val();
var orginator=$("#orginator").val();
var event_name=$("#event_name").val();

var flight_crew=$("#flight_crew").val();
var passenger=$("#passenger").val();
var pilot_command=$("#pilot_command").val();
var person_board=$("#person_board").val();
var cruising_speed=$("#cruising_speed").val();
var level=$("#level").val();
var route=$("#route").val();
var destination_aerodome=$("#destination_aerodome").val();

var event_start_date=$("#event_start_date").val();
var start_time=$("#start_time").val();
var end_time=$("#end_time").val();
if(event_name=="" || event_start_date=="" || start_time==""|| end_time=="")
{
alert("Please enter all required details.");
return false;
}
$.ajax({
 url:"../student/save_event.php",
 type:"POST",
 dataType: 'json',
 data: {date_filling:date_filling,orginator:orginator,event_name:event_name,flight_crew:flight_crew,passenger:passenger,pilot_command:pilot_command,person_board:person_board,cruising_speed:cruising_speed,level:level,route:route,destination_aerodome:destination_aerodome,event_start_date:event_start_date,start_time:start_time,end_time:end_time},
 success:function(response){
   $('#event_entry_modal').modal('hide');  
   if(response.status == true)
   {
	alert(response.msg);
	location.reload();
   }
   else
   {
	 alert(response.msg);
   }
  },
  error: function (xhr, status) {
  console.log('ajax error = ' + xhr.statusText);
  alert(response.msg);
  }
});    
return false;
}
</script>
</html>