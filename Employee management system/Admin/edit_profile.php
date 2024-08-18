<?php include_once'header.php'?>
<?php include_once'nav_bar.php'?>
<h2 align="center" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
EDIT PROFILE
</h2>
<?php
$temporary = $_REQUEST['r']; 

// Replace with actual database query to fetch the employee details
include_once'database_conn.php';
     $qry = "SELECT * FROM employee_data WHERE emp_id = '$temporary';";
     $resultset = mysqli_query($link,$qry);
     $row = mysqli_fetch_assoc($resultset);
     $emp_name = $row['emp_name'];
     $emp_dept = $row['emp_department'];
     $emp_job = $row['emp_job'];
     $emp_mob = $row['emp_mob'];
     $emp_email = $row['emp_email'];
     $emp_pass = $row['emp_password'];
     $emp_doj = $row['emp_doj'];
     $emp_skills = $row['emp_skills'];
     $emp_exp = $row['emp_experience'];
     // mysqli_close($link);
?>
<form action="" method="post">
<table class="table table-dark table-hover" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
    <tr table>
    <td >
        <img width="200px" class="img-thumbnail" src="../Images/user.jpg" alt="">
    </td>
    <td>
    <button style="margin-top:70px;" name="submitBtn" type="submit" class="btn btn-primary">
            Submit
    </button>
    </td>
    </tr>
    <tr>
        <td >
             Employee ID:
        </td>
        <td>
             <input type="text" name="f" readonly value="<?php echo $temporary;?>">
        </td>
    </tr>
    <tr>
        <td>
             Name:
        </td>
        <td>
             <input type="text" name="emp_name" value="<?php echo $emp_name?>">
        </td>
    </tr>
    <tr>
        <td>
             Department:
        </td>
        <td>
             <input type="text" name="emp_dept" value="<?php echo $emp_dept?>">
        </td>
    </tr>
    <tr>
        <td>
             Job Title:
        </td>
        <td>
             <input type="text" name="emp_job" value="<?php echo $emp_job?>">
        </td>
    <tr>
        <td>
             Email:
        </td>
        <td>
             <input type="text" name="emp_email" value="<?php echo $emp_email?>">
        </td>
    </tr>
    <tr>
        <td>
             Phone:
        </td>
        <td>
             <input type="text" name="emp_mob" value="<?php echo $emp_mob?>">
        </td>
    </tr>
    <tr>
        <td>
             Password:
        </td>
        <td>
             <input type="text" name="emp_pass" value="<?php echo $emp_pass?>">
        </td>
    </tr>
    <tr>
        <td>
             Date of Joining:
        </td>
        <td>
             <input type="date" name="emp_doj" value="<?php echo $emp_doj?>" readonly>
        </td>
    </tr>
    <tr>
        <td>
             Skills:
        </td>
        <td>
             <input type="text" name="emp_skills" value="<?php echo $emp_skills?>">
        </td>
    </tr>
    <tr>
        <td>
             Experience:
        </td>
        <td>
             <input type="text" name="emp_exp" value="<?php echo $emp_exp?> years" readonly>
        </td>
    </tr>

</table>
</form>
<?php
if (isset($_POST['submitBtn']))
{
     // include_once'database_conn.php';
     $emp_name = $_POST['emp_name'];
     $emp_dept = $_POST['emp_dept'];
     $emp_job = $_POST['emp_job'];
     $emp_mob = $_POST['emp_mob'];
     $emp_email = $_POST['emp_email'];
     $emp_pass = $_POST['emp_pass'];
     $emp_doj = $_POST['emp_doj'];
     $emp_skills = $_POST['emp_skills'];
     $emp_exp = $_POST['emp_exp'];
 // Replace with actual database query to update the employee details
// include_once'database_conn.php';
$query = "UPDATE employee_data SET emp_name='$emp_name', emp_department='$emp_dept', emp_job='$emp_job', emp_mob='$emp_mob', emp_email='$emp_email', emp_password='$emp_pass', emp_doj='$emp_doj', emp_skills='$emp_skills', emp_experience='$emp_exp' WHERE emp_id='$temporary'";
mysqli_query($link,$query);
}
?>
<?php include_once'footer.php'?>