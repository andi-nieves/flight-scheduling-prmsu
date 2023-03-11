<!-- AIRCRAFT -->

<!--ADD Modal -->
<div class="modal fade" id="aircraftModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adding Aircraft</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form id="addAircraft">
      <div class="modal-body px-0">
        <div class="container-fluid">
            
        <div id="errorMessage"class="alert alert-warning d-none"></div>
        
        <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputAircraft" class="form-label">Type of Aircraft</label>
            <input type="text" name="aircraft"class="form-control mb-4" id="inputAircraft">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Registration No.</label>
            <input type="text" name="registration"class="form-control mb-4" id="inputRegistration">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Type of Engine</label>
            <input type="text" name="engine"class="form-control mb-4" id="inputEngine">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">No. of seater</label>
            <input type="text" name="seater"class="form-control mb-4" id="inputSeater">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Flyable</label>
            <input type="text" name="flyable"class="form-control mb-4" id="inputFlyable">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Checking of Aircraft</label>
            <input type="text" name="checking"class="form-control mb-4" id="inputChecking">
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



<!-- EDIT MODAL -->
<div class="modal fade" id="aircraftEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Aircraft Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updateAircraft">
      <div class="modal-body px-0">

      
      <input type="hidden" name="aircraft_id" id="aircraft_id">

<div class="container-fluid">
<div id="errorMessageUpdate"class="alert alert-warning d-none"></div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputAircraft" class="form-label">Type of Aircraft</label>
            <input type="text" name="aircraft"id="aircraft"class="form-control mb-4" id="inputAircraft">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Registration No.</label>
            <input type="text" name="registration"id="registration"class="form-control mb-4" id="inputRegistration">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Type of Engine</label>
            <input type="text" name="engine"id="engine"class="form-control mb-4" id="inputEngine">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">No. of seater</label>
            <input type="text" name="seater"id="seater"class="form-control mb-4" id="inputSeater">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Flyable</label>
            <input type="text" name="flyable"id="flyable"class="form-control mb-4" id="inputFlyable">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Checking of Aircraft</label>
            <input type="text" name="checking"id="checking"class="form-control mb-4" id="inputChecking">
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Update</button>
      </div>
</form>
    </div>
  </div>
</div>


<!-- VIEW MODAL -->
<div class="modal fade" id="aircraftViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">View Aircraft Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-0">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputAircraft" class="form-label">Type of Aircraft</label>
            <p type="text" name="aircraft"id="view_aircraft"class="form-control mb-4" id="inputAircraft"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Registration No.</label>
            <p type="text" name="registration"id="view_registration"class="form-control mb-4" id="inputRegistration"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Type of Engine</label>
            <p type="text" name="engine"id="view_engine"class="form-control mb-4" id="inputEngine"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">No. of seater</label>
            <p type="text" name="seater"id="view_seater"class="form-control mb-4" id="inputSeater"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Flyable</label>
            <p type="text" name="flyable"id="view_flyable"class="form-control mb-4" id="inputFlyable"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Checking of Aircraft</label>
            <p type="text" name="checking"id="view_checking"class="form-control mb-4" id="inputChecking"></p>
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- AIRCRAFT -->




<!-- INSTRUCTOR -->
<!-- EDIT MODAL -->
<div class="modal fade" id="instructorEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Instructor Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updateInstructor">
      <div class="modal-body px-0">

      
      <input type="hidden" name="instructor_id" id="instructor_id">

<div class="container-fluid">
<div id="errorMessageUpdate"class="alert alert-warning d-none"></div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputAircraft" class="form-label">First name</label>
            <input type="text" name="fname"id="fname"class="form-control mb-4" id="inputAircraft">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Last name</label>
            <input type="text" name="lname"id="lname"class="form-control mb-4" id="inputRegistration">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Contact number</label>
            <input type="text" name="contact"id="contact"class="form-control mb-4" id="inputEngine">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">Gender</label>
            <input type="text" name="gender"id="gender"class="form-control mb-4" id="inputSeater">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Address</label>
            <input type="text" name="address"id="address"class="form-control mb-4" id="inputFlyable">
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Email</label>
            <input type="text" name="email"id="email"class="form-control mb-4" id="inputChecking">
        </div>
        <div class="col">
            <label for="inputChecking" class="form-label">License Expiration</label>
            <input type="date" name="license"id="license"class="form-control mb-4" id="inputChecking">
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Update</button>
      </div>
</form>
    </div>
  </div>
</div>


<!--ADD Modal -->
<div class="modal fade" id="instructorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adding Instructor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form id="addInstructor">
      <div class="modal-body px-0">
        <div class="container-fluid">
            
        <div id="errorMessage"class="alert alert-warning d-none"></div>
        
        <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputFirstname" class="form-label">First name</label>
            <input type="text" name="fname"class="form-control mb-4" id="inputFirstname">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Last name</label>
            <input type="text" name="lname"class="form-control mb-4" id="inputRegistration">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Contact number</label>
            <input type="text" name="contact"class="form-control mb-4" id="inputEngine">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">Gender</label>
            <!-- <input type="text" name="gender"class="form-control mb-4" id="inputSeater"> -->

            <select class="form-select form-control mb-4"name="gender">
            <option value="">-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Address</label>
            <input type="text" name="address"class="form-control mb-4" id="inputFlyable">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Email address</label>
            <input type="text" name="email"class="form-control mb-4" id="inputChecking">
        </div>
        <div class="col">
            <label for="inputChecking" class="form-label">License Expiration</label>
            <input type="date" name="license"class="form-control mb-4" id="inputChecking">
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- VIEW MODAL -->
<div class="modal fade" id="instructorViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">View Instructor Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-0">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputAircraft" class="form-label">First name</label>
            <p type="text" name="fname"id="view_fname"class="form-control mb-4" id="inputfname"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Last name</label>
            <p type="text" name="lname"id="view_lname"class="form-control mb-4" id="inputRegistration"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Contact number</label>
            <p type="text" name="contact"id="view_contact"class="form-control mb-4" id="inputEngine"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">Gender</label>
            <p type="text" name="gender"id="view_gender"class="form-control mb-4" id="inputSeater"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Address</label>
            <p type="text" name="address"id="view_address"class="form-control mb-4" id="inputFlyable"></p>
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Email</label>
            <p type="text" name="email"id="view_email"class="form-control mb-4" id="inputChecking"></p>
        </div>
        <div class="col">
            <label for="inputChecking" class="form-label">License Expiration</label>
            <p type="date" name="license"id="view_license"class="form-control mb-4" id="inputChecking"></p>
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- INSTRUCTOR -->


<!-- STUDENT -->

<!--ADD Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adding Student Pilot</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form id="addStudent">
      <div class="modal-body px-0">
        <div class="container-fluid">
            
        <div id="errorMessage"class="alert alert-warning d-none"></div>
        
        <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputFirstname" class="form-label">First name</label>
            <input type="text" name="fname"class="form-control mb-4" id="inputFirstname">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Last name</label>
            <input type="text" name="lname"class="form-control mb-4" id="inputRegistration">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Contact number</label>
            <input type="text" name="contact"class="form-control mb-4" id="inputEngine">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">Gender</label>
            <select class="form-select form-control mb-4"name="gender">
            <option value="">-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Address</label>
            <input type="text" name="address"class="form-control mb-4" id="inputFlyable">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Email address</label>
            <input type="text" name="email"class="form-control mb-4" id="inputChecking">
        </div>
        <div class="col">
            <label for="inputChecking" class="form-label">License Expiration</label>
            <input type="date" name="license"class="form-control mb-4" id="inputChecking">
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- VIEW MODAL -->
<div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">View Student Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-0">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputAircraft" class="form-label">First name</label>
            <p type="text" name="fname"id="view_sfname"class="form-control mb-4" id="inputfname"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Last name</label>
            <p type="text" name="lname"id="view_slname"class="form-control mb-4" id="inputRegistration"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Contact number</label>
            <p type="text" name="contact"id="view_scontact"class="form-control mb-4" id="inputEngine"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">Gender</label>
            <p type="text" name="gender"id="view_sgender"class="form-control mb-4" id="inputSeater"></p>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Address</label>
            <p type="text" name="address"id="view_saddress"class="form-control mb-4" id="inputFlyable"></p>
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Email</label>
            <p type="text" name="email"id="view_semail"class="form-control mb-4" id="inputChecking"></p>
        </div>
        <div class="col">
            <label for="inputChecking" class="form-label">License Expiration</label>
            <p type="date" name="license"id="view_slicense"class="form-control mb-4" id="inputChecking"></p>
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- EDIT MODAL -->
<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Student Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updateStudent">
      <div class="modal-body px-0">

      
      <input type="hidden" name="student_id" id="student_id">

<div class="container-fluid">
<div id="errorMessageUpdate"class="alert alert-warning d-none"></div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <label for="inputAircraft" class="form-label">First name</label>
            <input type="text" name="fname"id="sfname"class="form-control mb-4" id="inputAircraft">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputRegistration" class="form-label">Last name</label>
            <input type="text" name="lname"id="slname"class="form-control mb-4" id="inputRegistration">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputEngine" class="form-label">Contact number</label>
            <input type="text" name="contact"id="scontact"class="form-control mb-4" id="inputEngine">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputSeater" class="form-label">Gender</label>
            <select class="form-select form-control mb-4"name="gender" id="sgender">
            <option value="">-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Address</label>
            <input type="text" name="address"id="saddress"class="form-control mb-4" id="inputFlyable">
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Email</label>
            <input type="text" name="email"id="semail"class="form-control mb-4" id="inputChecking">
        </div>
        <div class="col">
            <label for="inputChecking" class="form-label">License Expiration</label>
            <input type="date" name="license"id="slicense"class="form-control mb-4" id="inputChecking">
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Update</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- STUDENT -->


<!-- USER -->

<!--ADD Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adding User Account</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
      <form id="addAccount">
      <div class="modal-body px-0">
        <div class="container-fluid">
            
        <div id="errorMessage"class="alert alert-warning d-none"></div>
        
        <div class="row">
        <div class="col-lg-12">
            <label class="form-label">First name</label>
            <input type="text" name="fname"class="form-control mb-4">
        </div>
    <div class="col-lg-12">
            <label class="form-label">Last name</label>
            <input type="text" name="lname"class="form-control mb-4">
        </div>
    <div class="col-lg-12">
            <label class="form-label">Email address</label>
            <input type="text" name="email"class="form-control mb-4">
        </div>
    <div class="col-lg-6">
            <label class="form-label">Password</label>
            <input type="password" name="password"class="form-control mb-4">
        </div>
    <div class="col-lg-6">
            <label class="form-label">Confirm password</label>
            <input type="password" name="cpassword"class="form-control mb-4">
        </div>
        <div class="col">
            <label class="form-label">Contact number</label>
            <input type="text" name="contact"class="form-control mb-4">
        </div>
        <div class="col-lg-12">
            <label class="form-label">User type</label>
            <select class="form-select form-control mb-4"name="usertype">
            <option value="">-- Select User type --</option>
            <option value="user">Student Pilot</option>
            <option value="admin">Administrator</option>
        </select>
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Add Account</button>
      </div>
      </form>

      
    </div>
  </div>
</div>



<!-- EDIT MODAL -->
<div class="modal fade" id="accountEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Account Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="updateAccount">
      <div class="modal-body px-0">

      
      <input type="hidden" name="user_id" id="user_id">

<div class="container-fluid">
<div id="errorMessageUpdate"class="alert alert-warning d-none"></div>
    <div class="row">
        <div class="col-lg-12">
            <label for="inputAircraft" class="form-label">First name</label>
            <input type="text" name="fname"id="ufname"class="form-control mb-4" id="inputAircraft">
        </div>
    <div class="col-lg-12">
            <label for="inputRegistration" class="form-label">Last name</label>
            <input type="text" name="lname"id="ulname"class="form-control mb-4" id="inputRegistration">
        </div>
    <div class="col-lg-12">
            <label for="inputEngine" class="form-label">Email address</label>
            <input type="text" name="email"id="uemail"class="form-control mb-4" id="inputEngine">
        </div>
    <div class="col-lg-6 col-md-12">
            <label for="inputFlyable" class="form-label">Password</label>
            <input type="password" name="password"id="upassword"class="form-control mb-4" id="inputFlyable">
        </div>
        <div class="col-lg-6 col-md-12">
            <label for="inputChecking" class="form-label">Confirm password</label>
            <input type="password" name="cpassword"id="ucpassword"class="form-control mb-4" id="inputChecking">
        </div>
        <div class="col">
            <label for="inputChecking" class="form-label">Contact number</label>
            <input type="text" name="contact"id="ucontact"class="form-control mb-4" id="inputChecking">
        </div>
        <div class="col-lg-12">
            <label for="inputSeater" class="form-label">User type</label>
            <select class="form-select form-control mb-4"name="usertype" id="uusertype">
            <option value="">-- Select User type --</option>
            <option value="user">Student Pilot</option>
            <option value="admin">Administrator</option>
            <option value="instructor">Instructor</option>

        </select>
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" id="submit"class="btn btn-primary">Update</button>
      </div>
</form>
    </div>
  </div>
</div>

<!-- VIEW MODAL -->
<div class="modal fade" id="accountViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">View Account Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-0">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <label class="form-label">First name</label>
            <p type="text" name="fname"id="view_ufname"class="form-control mb-4"></p>
        </div>
    <div class="col-lg-12">
            <label class="form-label">Last name</label>
            <p type="text" name="lname"id="view_ulname"class="form-control mb-4"></p>
        </div>
    <div class="col-lg-12">
            <label class="form-label">Email</label>
            <p type="text" name="email"id="view_uemail"class="form-control mb-4"></p>
        </div>
    <div class="col-lg-12">
            <label class="form-label">Contact number</label>
            <p type="text" name="contact"id="view_ucontact"class="form-control mb-4"></p>
        </div>
        <div class="col-lg-12">
            <label class="form-label">User type</label>
            <p type="text" name="usertype"id="view_usertype"class="form-control mb-4"></p>
        </div>
    </div>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- USER -->