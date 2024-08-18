<?php include_once'header.php'?>
<?php include_once'nav_bar.php'?>
<h2 align="center" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
LEAVE APPLICATION
</h2>
<hr size="10" color="black">





<div class="container mt-5" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <form method="POST">
            <table class="table table-dark table-bordered">
                <tbody>
                    <tr>
                        <td><label for="employeeID" class="form-label">Employee ID</label></td>
                        <td><input name="emp_id" type="number" value="0000" class="form-control" id="employeeID"  readonly required></td>
                    </tr>
                    <tr>
                        <td><label for="employeeName" class="form-label">Employee Name</label></td>
                        <td><input name="emp_unm" type="text" class="form-control" id="employeeName" readonly value="Anonymous"  required></td>
                    </tr>
                    <tr>
                        <td><label for="department" class="form-label">Department</label></td>
                        <td><input name="emp_dept" type="text" class="form-control" value="Department" readonly id="department"  required></td>
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
                        <td><textarea name="reason" class="form-control" id="reason" rows="3"></textarea></td>
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
        echo "<script>alert('Leave submitted successfully')</script>";
    }
}
?>


<!-- CREATE TABLE leave_applications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id int ,
    employee_name VARCHAR(255) NOT NULL,
    department VARCHAR(255) NOT NULL,
    leave_type VARCHAR(50) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    reason TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->








<?php include_once'footer.php'?>