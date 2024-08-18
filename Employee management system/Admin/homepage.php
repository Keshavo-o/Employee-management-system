<?php include_once 'header.php'?>
<?php include_once'nav_bar.php';?>
<?php include_once 'database_conn.php';?>
<style>
    h2:hover
    {
        color:darkslategray;
    }
</style>
<span style="display: inline-block;">
  <h2 style="display: inline-block; padding-left:20px; padding-top: 10px;">HOME</h2>
</span>
<button type="button" style="float: right; margin: 14px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notificationModal">
  Show Notification
</button>
<a href="./leave_applications.php">
<button type="button" style="float: right; margin: 14px; margin-right:0px;" class="btn btn-primary">
  Leave Applications
</button>
</a>










<?php
// Database connections
$company_db_link = mysqli_connect("localhost","root","","employee_management_system"); 
$complaints_db_link = mysqli_connect("localhost","root","","complaints");

if (!$company_db_link || !$complaints_db_link) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Query for total number of employees
$employees_query = "SELECT COUNT(*) AS total_employees FROM employee_data";
$employees_result = mysqli_query($company_db_link, $employees_query);
$employees_row = mysqli_fetch_assoc($employees_result);
$total_employees = $employees_row['total_employees'];

// Query for total number of leave applications
$leave_applications_query = "SELECT COUNT(*) AS total_leave_applications FROM leave_applications";
$leave_applications_result = mysqli_query($company_db_link, $leave_applications_query);
$leave_applications_row = mysqli_fetch_assoc($leave_applications_result);
$total_leave_applications = $leave_applications_row['total_leave_applications'];

// Query for total number of complaints
$complaints_query = "SELECT COUNT(*) AS total_complaints FROM complaint_data";
$complaints_result = mysqli_query($complaints_db_link, $complaints_query);
$complaints_row = mysqli_fetch_assoc($complaints_result);
$total_complaints = $complaints_row['total_complaints'];

// Close the database connections
mysqli_close($company_db_link);
mysqli_close($complaints_db_link);
?>




<style>
#company-news {
    background-color: #f8f9fa;
    border-radius: 10px;
    max-height: 300px; /* Set a maximum height for the news section */
    overflow-y: auto; /* Add a vertical scrollbar when content overflows */
}

#company-news .card-header {
    background-color: #343a40;
    color: white;
    border-radius: 10px 10px 0 0;
}

#company-news .card-title {
    margin: 0;
    font-size: 1.25rem;
    font-weight: bold;
}

#company-news .list-group-item {
    background-color: #f8f9fa;
    border: none;
    padding: 10px 20px;
}

#company-news .list-group-item:hover {
    background-color: #e9ecef;
}

/* Custom scrollbar styling (optional) */
#company-news::-webkit-scrollbar {
    width: 6px; /* Width of the scrollbar */
}

#company-news::-webkit-scrollbar-thumb {
    background-color: #6c757d; /* Color of the scrollbar thumb */
    border-radius: 10px; /* Round the edges of the scrollbar thumb */
}

#company-news::-webkit-scrollbar-track {
    background-color: #f8f9fa; /* Background of the scrollbar track */
}

</style>





<style>
  #weather-clock {
    background-color: #f8f9fa;
    border-radius: 10px;
    text-align: center;
}

#weather-clock .card-header {
    background-color: #343a40;
    color: white;
    border-radius: 10px 10px 0 0;
}

#weather-clock .card-title {
    margin: 0;
    font-size: 1.25rem;
    font-weight: bold;
}

#clock {
    font-size: 2rem;
    font-weight: bold;
}

#weather h6 {
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

#weather p {
    margin: 0;
    font-size: 1rem;
    color: #6c757d;
}

</style>














<hr size="5px" style="background-color:black;">
<div style="display: flex; flex:row; margin:10px; width:100%">
    <div style="background-color:darkgrey; width:50%; display:inline-block; border-radius:20px; ">
    <div style="background-color:#343A40; display:block;   height:50%; width:100%;  border-radius:20px;">
    <div class="card mb-4" id="weather-clock">
    <div class="card-header">
        <h5 class="card-title">Weather & Clock</h5>
    </div>
    <div class="card-body">
        <div id="clock" class="mb-3"></div>
        <div id="weather">
            <h6 id="weather-location">Loading...</h6>
            <br>
            <h3>Location: New Delhi</h3>
            <br>
            
    <button style="width:200px" class="btn btn-primary">Get Weather</button>
        </div>
    </div>
</div>

    </div>

    <script>
      // Clock function
function updateClock() {
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    const seconds = now.getSeconds().toString().padStart(2, '0');
    const timeString = `${hours}:${minutes}:${seconds}`;
    document.getElementById('clock').textContent = timeString;
}



// Initialize clock
setInterval(updateClock, 1000);

    </script>


  <div style="background-color:black; display:block; height:50%; width:100%;  border-radius:20px;">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224346.5400482278!2d77.04417370923834!3d28.527252739111578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1723969939952!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border-radius: 20px;" frameborder="0" width="100%" height="100%">

       </iframe> 
    </div>




    </div>
    <span style="width:48%; margin-left:10px; height:600px">
        <div style="background-color:black; display:block; height:50%; width:100%;  border-radius:20px;">
        <div class="card mb-4" id="company-news">
    <div class="card-header">
        <h5 class="card-title" >Company News & Latest Updates</h5>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
        <li class="list-group-item">
                <strong>August 18, 2024:</strong> New Employee Onboarding Session.
            </li>
            <li class="list-group-item">
                <strong>August 18, 2024:</strong> New Employee Onboarding Session.
            </li>
            <li class="list-group-item">
                <strong>August 18, 2024:</strong> New Employee Onboarding Session.
            </li>
            <li class="list-group-item">
                <strong>August 18, 2024:</strong> New Employee Onboarding Session.
            </li>
            <li class="list-group-item">
                <strong>August 18, 2024:</strong> New Employee Onboarding Session.
            </li>
            <li class="list-group-item">
                <strong>August 18, 2024:</strong> New Employee Onboarding Session.
            </li>
            <li class="list-group-item">
                <strong>August 15, 2024:</strong> Independence Day Celebration.
            </li>
            <li class="list-group-item">
                <strong>August 10, 2024:</strong> Q2 Financial Report Released.
            </li>
            <li class="list-group-item">
                <strong>August 05, 2024:</strong> Annual Team Building Event.
            </li>
            <li class="list-group-item">
                <strong>August 01, 2024:</strong> Launch of New Company Website.
            </li>
            <li class="list-group-item">
                <strong>July 28, 2024:</strong> CEO's Monthly Update.
            </li>
            <li class="list-group-item">
                <strong>July 20, 2024:</strong> Completion of Office Renovation.
            </li>
            <li class="list-group-item">
                <strong>July 15, 2024:</strong> New Client Acquisition Announcement.
            </li>
            <li class="list-group-item">
                <strong>July 10, 2024:</strong> Employee Satisfaction Survey Results.
            </li>
            <li class="list-group-item">
                <strong>July 05, 2024:</strong> Implementation of New HR Policies.
            </li>
            <li class="list-group-item">
                <strong>July 01, 2024:</strong> Start of New Financial Year.
            </li>
            <li class="list-group-item">
                <strong>June 25, 2024:</strong> Office Fire Drill.
            </li>
            <li class="list-group-item">
                <strong>June 20, 2024:</strong> IT Security Training Session.
            </li>
            <!-- Add more news items here -->
        </ul>
    </div>
</div>
        </div>
        <br>
        <div style="background-color:#2B3838; display:inline-block; height:50%;  border-radius:20px;  width:100%;">
        <div class="container">
          <br>
    <h2 style="color: antiquewhite;" class="text-center">Statistics</h2>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Employees</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $total_employees; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Leave Applications</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $total_leave_applications; ?></h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Total Complaints</div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $total_complaints; ?></h5>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </span>
</div>



<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationModalLabel">Notification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Currently, you don't have any new notifications.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="./complaints.php"><button type="button" class="btn btn-primary">Take Action</button></a>
      </div>
    </div>
  </div>
</div>
<br>
<?php include_once'footer.php';?>
