<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>    
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->




<script src="../js/windyAPI.js"></script>
<script src="../js/weatherTime.js"></script>


<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</script>

<script type="text/javascript">
    // 
var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");
toggleButton.onclick = function () 
{
    el.classList.toggle("toggled");
};
// 
$(document).on('submit', '#addAircraft', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("addAircraft", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessage').addClass('d-none');
                $('#aircraftModal').modal('hide');
                $('#addAircraft')[0].reset();
                
                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                    
                $('#myTable').load(location.href + " #myTable");
            }
        }
    });
});

$(document).on('click', '.editAircraft', function () {
    var aircraft_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?aircraft_id=" + aircraft_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#aircraft_id').val(res.data.id);
                $('#aircraft').val(res.data.aircraft);
                $('#registration').val(res.data.registration);
                $('#engine').val(res.data.engine);
                $('#seater').val(res.data.seater);
                $('#flyable').val(res.data.flyable);
                $('#checking').val(res.data.checking);
                
                $('#aircraftEditModal').modal('show');
            }
        }
    });
});

$(document).on('submit', '#updateAircraft', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("updateAircraft", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessageUpdate').addClass('d-none');
                $('#aircraftEditModal').modal('hide');
                $('#updateAircraft')[0].reset();

                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                $('#myTable').load(location.href + " #myTable");
            }
        }
    });
});

$(document).on('click', '.viewAircraft', function () {
    var aircraft_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?aircraft_id=" + aircraft_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                                    alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#view_aircraft').text(res.data.aircraft);
                $('#view_registration').text(res.data.registration);
                $('#view_engine').text(res.data.engine);
                $('#view_seater').text(res.data.seater);
                $('#view_flyable').text(res.data.flyable);
                $('#view_checking').text(res.data.checking);
                
                $('#aircraftViewModal').modal('show');
            }
        }
    });
});

//delete
$(document).on('click', '.delAircraft', function (e) {
    e.preventDefault();

    if(confirm('Are you sure you want to delete this data permanently?'))
    {
        var aircraft_id = $(this).val();
        $.ajax({
            type: "post",
            url: "code.php",
            data: {
                'delete_aircraft': true,
                'aircraft_id': aircraft_id
            },
            success: function (response) {
                var res = jQuery.parseJSON(response);
                if(res.status == 500){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                }else{
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable")
                }
            }
        });
    }

});



// INSTRUCTOR
$(document).on('submit', '#addInstructor', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("addInstructor", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessage').addClass('d-none');
                $('#instructorModal').modal('hide');
                $('#addInstructor')[0].reset();
                
                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                    
                $('#myTable').load(location.href + " #myTable");
            }
        }
    });
});

$(document).on('click', '.viewInstructor', function () {
    var instructor_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?instructor_id=" + instructor_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                                    alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#view_fname').text(res.data.firstname);
                $('#view_lname').text(res.data.lastname);
                $('#view_contact').text(res.data.contact);
                $('#view_gender').text(res.data.gender);
                $('#view_address').text(res.data.address);
                $('#view_email').text(res.data.email);
                $('#view_license').text(res.data.license);

                
                $('#instructorViewModal').modal('show');
            }
        }
    });
});

$(document).on('click', '.editInstructor', function () {
    var instructor_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?instructor_id=" + instructor_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#instructor_id').val(res.data.id);
                $('#fname').val(res.data.firstname);
                $('#lname').val(res.data.lastname);
                $('#contact').val(res.data.contact);
                $('#gender').val(res.data.gender);
                $('#address').val(res.data.address);
                $('#email').val(res.data.email);
                $('#license').val(res.data.license);
                
                $('#instructorEditModal').modal('show');
            }
        }
    });
});
$(document).on('submit', '#updateInstructor', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("updateInstructor", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessageUpdate').addClass('d-none');
                $('#instructorEditModal').modal('hide');
                $('#updateInstructor')[0].reset();

                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                $('#myTable').load(location.href + " #myTable");
            }
        }
    });
});
$(document).on('click', '.delInstructor', function (e) {
    e.preventDefault();

    if(confirm('Are you sure you want to delete this data permanently?'))
    {
        var instructor_id = $(this).val();
        $.ajax({
            type: "post",
            url: "code.php",
            data: {
                'delete_instructor': true,
                'instructor_id': instructor_id
            },
            success: function (response) {
                var res = jQuery.parseJSON(response);
                if(res.status == 500){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                }else{
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable")
                }
            }
        });
    }

});
// INSTRUCTOR


// STUDENT
$(document).on('click', '.viewStudent', function () {
    var student_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?student_id=" + student_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                                    alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#view_sfname').text(res.data.firstname);
                $('#view_slname').text(res.data.lastname);
                $('#view_scontact').text(res.data.contact);
                $('#view_sgender').text(res.data.gender);
                $('#view_saddress').text(res.data.address);
                $('#view_semail').text(res.data.email);
                $('#view_slicense').text(res.data.license);

                
                $('#studentViewModal').modal('show');
            }
        }
    });
});

$(document).on('submit', '#addStudent', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("addStudent", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessage').addClass('d-none');
                $('#studentModal').modal('hide');
                $('#addStudent')[0].reset();
                
                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                    
                $('#myTable').load(location.href + " #myTable");
            }
        }
    });
});

$(document).on('click', '.editStudent', function () {
    var student_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?student_id=" + student_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#student_id').val(res.data.id);
                $('#sfname').val(res.data.firstname);
                $('#slname').val(res.data.lastname);
                $('#scontact').val(res.data.contact);
                $('#sgender').val(res.data.gender);
                $('#saddress').val(res.data.address);
                $('#semail').val(res.data.email);
                $('#slicense').val(res.data.license);
                
                $('#studentEditModal').modal('show');
            }
        }
    });
});
$(document).on('submit', '#updateStudent', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("updateStudent", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessageUpdate').addClass('d-none');
                $('#studentEditModal').modal('hide');
                $('#updateStudent')[0].reset();

                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                $('#myTable').load(location.href + " #myTable");
            }
        }
    });
});

$(document).on('click', '.delStudent', function (e) {
    e.preventDefault();

    if(confirm('Are you sure you want to delete this data permanently?'))
    {
        var student_id = $(this).val();
        $.ajax({
            type: "post",
            url: "code.php",
            data: {
                'delete_student': true,
                'student_id': student_id
            },
            success: function (response) {
                var res = jQuery.parseJSON(response);
                if(res.status == 500){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                }else{
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable")
                }
            }
        });
    }

});
// STUDENT

// ACCOUNT
$(document).on('click', '.delUser', function (e) {
    e.preventDefault();

    if(confirm('Are you sure you want to delete this data permanently?'))
    {
        var user_id = $(this).val();
        $.ajax({
            type: "post",
            url: "code.php",
            data: {
                'delete_user': true,
                'user_id': user_id
            },
            success: function (response) {
                var res = jQuery.parseJSON(response);
                if(res.status == 500){
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                }else{
                    alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                    $('#myTable').load(location.href + " #myTable")
                }
            }
        });
    }

});

$(document).on('submit', '#addAccount', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("addAccount", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessage').addClass('d-none');
                $('#accountModal').modal('hide');
                $('#addAccount')[0].reset();
                
                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);
                    
                $('#myTable').load(location.href + " #myTable");
            }
            else if(res.status == 500){
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }
            else if(res.status == 422){
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }
        }
    });
});

$(document).on('click', '.editUser', function () {
    var user_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?user_id=" + user_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#user_id').val(res.data.id);
                $('#ufname').val(res.data.firstname);
                $('#ulname').val(res.data.lastname);
                $('#uemail').val(res.data.email);
                $('#ucontact').val(res.data.contact);
                $('#upassword').val(res.data.password);
                $('#ucpassword').val(res.data.password);
                $('#uusertype').val(res.data.usertype);
                
                $('#accountEditModal').modal('show');
            }
        }
    });
});

$(document).on('submit', '#updateAccount', function (e) {
    e.preventDefault();
    
    var formData =  new FormData(this);
    formData.append("updateAccount", true);

    $.ajax({
        type: "POST",
        url: "../admin/code.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) 
        {
            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#errorMessageUpdate').addClass('d-none');
                $('#accountEditModal').modal('hide');
                $('#updateAccount')[0].reset();

                alertify.set('notifier','position', 'top-right');
                    alertify.success(res.message);

                $('#myTable').load(location.href + " #myTable");
            }
        }
    });
});

$(document).on('click', '.viewUser', function () {
    var user_id = $(this).val();
    // alert(aircraft_id);

    $.ajax({
        type: "get",
        url: "../admin/code.php?user_id=" + user_id,
        success: function (response) {

            var res = jQuery.parseJSON(response);
            if(res.status == 422)
            {
                                    alertify.set('notifier','position', 'top-right');
                    alertify.error(res.message);
            }else if(res.status == 200){

                $('#view_ufname').text(res.data.firstname);
                $('#view_ulname').text(res.data.lastname);
                $('#view_uemail').text(res.data.email);
                $('#view_ucontact').text(res.data.contact);
                $('#view_usertype').text(res.data.usertype);

                $('#accountViewModal').modal('show');
            }
        }
    });
});
// ACCOUNT

</script>
    
</body>
<script>
    
$(document).ready(function() {
	display_events();
}); //end document.ready block

function display_events() {
	var events = new Array();
$.ajax({
    url: '../admin/display_event.php',  
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
 url:"../admin/save_event.php",
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

