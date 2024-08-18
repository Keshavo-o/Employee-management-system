<?php include_once 'header.php'?>
<?php include_once'nav_bar.php';?>
<style>
    h2:hover
    {
        color:darkslategray;
    }
</style>

<?php
$user_id = $_GET['user_id'];

$link = mysqli_connect("localhost", "root", "", "employee_management_system");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM employee_data WHERE emp_id = '$user_id'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Store employee data in variables
        $img=$row['emp_pic_link'];
        $name = $row['emp_name'];
        $email = $row['emp_email'];
        $position = $row['emp_job'];
        $department = $row['emp_department'];
        $joining_date = $row['emp_doj'];
        $mobile = $row['emp_mob'];
        $skills = $row['emp_skills'];
        $experience = $row['emp_experience'];

    } else {
        echo "No employee found with ID: " . htmlspecialchars($user_id);
        exit();
    }
} else {
    echo "No user ID passed.";
    exit();
}

?>
<span style="display: inline-block;">
  <h2 style="display: inline-block; padding-left:20px; padding-top: 10px;">Welcome <?php echo htmlspecialchars($name); ?></h2>
</span>
<button type="button" style="float: right; margin: 14px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notificationModal">
  Show Notification
</button>
<button type="button" style="float: right; margin: 14px; margin-right:0px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notificationModal_1">
  Having trouble?
</button>
<button type="button" style="float: right; margin: 14px; margin-right:0px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#leaveModal">
  Apply for leave
</button>



<?php
$user_id = $_GET['user_id'];

$link = mysqli_connect("localhost", "root", "", "employee_management_system");

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM employee_data WHERE emp_id = '$user_id'";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Store employee data in variables
        $img=$row['emp_pic_link'];
        $name = $row['emp_name'];
        $email = $row['emp_email'];
        $position = $row['emp_job'];
        $department = $row['emp_department'];
        $joining_date = $row['emp_doj'];
        $mobile = $row['emp_mob'];
        $skills = $row['emp_skills'];
        $experience = $row['emp_experience'];

    } else {
        echo "No employee found with ID: " . htmlspecialchars($user_id);
        exit();
    }
} else {
    echo "No user ID passed.";
    exit();
}

?>




<style>
     .dashboard-container {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            margin-left: 70px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }
        .dashboard-header {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .employee-info {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .employee-info span {
            font-weight: bold;
        }
    </style>
</style>









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
    <div style="color:aliceblue; font-family:Verdana, Geneva, Tahoma, sans-serif; background-color:black; width:50%; display:inline-block; border-radius:20px; ">
        <?php
            //  echo "User ID: " . htmlspecialchars($user_id);
        ?>
         <div style="color:black" class="dashboard-container">
        <div class="dashboard-header">Employee Dashboard</div>
        <hr>
        <span style="display: inline-block; width:auto; height:auto;">
        <div class="employee-info" style=""> <img src="<?php echo htmlspecialchars($img);?>" alt="Profile Pic" style="width: 150px; height: 150px; border-radius: 50%;"></div>
        </span>
        <span style="display: inline-block; width:auto;">
        <div class="employee-info"><span>Employee ID:</span> <?php echo htmlspecialchars($user_id); ?></div>
        <div class="employee-info"><span>Name:</span> <?php echo htmlspecialchars($name); ?></div>
        <div class="employee-info"><span>Email:</span> <?php echo htmlspecialchars($email); ?></div>
        <div class="employee-info"><span>Position:</span> <?php echo htmlspecialchars($position); ?></div>
        <div class="employee-info"><span>Department:</span> <?php echo htmlspecialchars($department); ?></div>
        <div class="employee-info"><span>Joining Date:</span> <?php echo htmlspecialchars($joining_date); ?></div>
        <div class="employee-info"><span>Mobile:</span> <?php echo htmlspecialchars($mobile);?></div>
        <div class="employee-info"><span>Skills:</span> <?php echo htmlspecialchars($skills);?></div>
        <div class="employee-info"><span>Experience:</span> <?php echo htmlspecialchars($experience)," years";?></div>
        </span>
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
        <div style="background-color:black; display:inline-block; height:49%;  border-radius:20px; margin-top:10px; width:100%;">
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
    </span>
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




<!-- complaints -->
 <form action="" method="post">
<div class="modal fade" id="notificationModal_1" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationModalLabel">Complaint about something</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <label for="name">Name:</label>
        <input type="text" class="form-control" value="<?php echo htmlspecialchars($name); ?>" id="name" name="name" readonly>
        <label for="complaints">What's the issue you're facing with the company?</label>
        <select class="form-control" name="complaints" id="complaints">
            <option value="Technical Issues">Technical Issues</option>
            <option value="Product Quality">Product Quality</option>
            <option value="Customer Service">Customer Service</option>
            <option value="Security Issues">Security Issues</option>
            <option value="Privacy Issues">Privacy Issues</option>
            <option value="Performance Issues">Performance Issues</option>
            <option disabled>Other</option>
        </select>
      </div>
      <div align="center">
      <button type="submit" name="Btn" class="btn btn-primary">Submit</button>
      <!-- <a href="./complaints.php"><button type="button" class="btn btn-dark">Anything else?</button></a> -->
      </div>
       <br>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>      </div>
    </div>
  </div>
</div>
</form>

<?php
$link=mysqli_connect("localhost","root","","complaints"); 
extract($_REQUEST);
// need to add name of the user filing complaint
if(isset($Btn))
{
    $currentDate = date("Y-m-d");
    $qry = "insert into complaint_data(name,complaint,date_of_complaint,status)
    values('$name','$complaints','$currentDate','Pending');";
    mysqli_query($link,$qry);
    mysqli_close($link);
}
?>




 



<div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationModalLabel">Leave Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container mt-5" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <form method="POST">
            <table class="table table-dark table-bordered">
                <tbody>
                    <tr>
                        <td><label for="employeeID" class="form-label">Employee ID</label></td>
                        <td><input name="emp_id" type="number" value="<?php echo htmlspecialchars($user_id); ?>" class="form-control" id="employeeID"  readonly required></td>
                    </tr>
                    <tr>
                        <td><label for="employeeName" class="form-label">Employee Name</label></td>
                        <td><input name="emp_unm" type="text" class="form-control" id="employeeName" readonly value="<?php echo htmlspecialchars($name); ?>"  required></td>
                    </tr>
                    <tr>
                        <td><label for="department" class="form-label">Department</label></td>
                        <td><input name="emp_dept" type="text" class="form-control" value="<?php echo htmlspecialchars($department); ?>" readonly id="department"  required></td>
                    </tr>
                    <tr>
                        <td><label for="leaveType" class="form-label">Leave Type</label></td>
                        <td>
                            <select name="type" class="form-select" id="leaveType" required>
                                <option value="Casual Leave">Casual Leave</option>
                                <option value="Sick Leave">Sick Leave</option>
                                <option value="Maternity Leave">Maternity Leave</option>
                                <option value="Paternity Leave">Paternity Leave</option>
                                <option value="Annual Leave">Annual Leave</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="startDate" class="form-label">Start Date</label></td>
                        <td><input name="start" type="date" class="form-control" id="startDate"  ></td>
                    </tr>
                    <tr>
                        <td><label for="endDate" class="form-label">End Date</label></td>
                        <td><input name="end" type="date" class="form-control" id="endDate" ></td>
                    </tr>
                    <tr>
                        <td><label for="reason" class="form-label">Reason for Leave</label></td>
                        <td><textarea required name="reason" class="form-control" id="reason" rows="3"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-3">
                <button type="submit" name="sBtn" class="btn btn-primary">Submit Application</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
    <br>



<?php  
extract($_REQUEST);
// var_dump($_REQUEST);
if(isset($sBtn))
{
    // $employeeID = $_POST['emp_id'];
    // $emp_unm = $_POST['emp_unm'];
    // $emp_dept = $_POST['emp_dept'];
    $link=mysqli_connect("localhost","root","","employee_management_system"); 
    $qry = "insert into leave_applications(employee_id,employee_name,department,leave_type,start_date,end_date,reason)
    values('$emp_id','$emp_unm','$emp_dept','$type','$start','$end','$reason');";
    $run = mysqli_query($link,$qry);
    if($run)
    {
        // echo "<script>alert('Leave submitted successfully')</script>";
    }
}
?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <a href="./complaints.php"><button type="button" class="btn btn-primary">Take Action</button></a> -->
      </div>
    </div>
  </div>
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
        <!-- <a href="./complaints.php"><button type="button" class="btn btn-primary">Take Action</button></a> -->
      </div>
    </div>
  </div>
</div>
<?php include_once'footer.php';?>
