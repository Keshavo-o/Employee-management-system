<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            font-family: "Roboto Mono", monospace;
            font-optical-sizing: auto;
            font-weight: 300;
            font-style: normal;
        }
        td
        {
            vertical-align:middle;
        }
        .btt
        {
            margin-top: 0px;
            width: 20%;
        }
        .heading-container:hover
        {
            color: wheat;
            cursor:none;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Gupter:wght@400;500;700&family=Oswald:wght@200..700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: grey;">
<?php include_once'nav_bar.php'?>
<form action="" method="post" enctype="multipart/form-data">
    <div>
        <h1 class="heading-container" align="center">
            Add Employee
        </h1>
    </div>
<table class="table table-dark" >
    <tr>
        <td>
            Enter the employee name:
        </td>
        <td>
            <input class="form-control"  type="text" name="emp_unm">
        </td>
    </tr>    
    <tr>
        <td>
            Enter the Department:
        </td>
        <td>
            <select class="form-control" name="emp_dept" id="" class="">
                <option disabled selected style="text-align: center;">--select--</option>
                <option value="Software Development">Software Development</option>
                <option value="Quality Assurance">Quality Assurance</option>
                <option value="IT Support">IT Support</option>
                <option value="System Administration">System Administration</option>
                <option value="Project Management">Project Management</option>
                <option value="Product Management">Product Management</option>
                <option value="Business Analysis">Business Analysis</option>
                <option value="Sales and Marketing">Sales and Marketing</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Finance and Accounting">Finance & Accounting</option>
                <option value="Research and Development">Research</option>
                <option value="Cybersecurity">Cybersecurity</option>
                <option value="Legal and Compliance">Legal and Compliance</option>
                <option value="Training and Development">Training</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>
            Job title of Employee:
        </td>
        <td>
            <input class="form-control" class="form-control" type="text" name="emp_job">
        </td>
    </tr>

    <tr>
        <td>
            Mobile number:
        </td>
        <td>
            <input class="form-control" type="number" name="emp_mob">
        </td>
    </tr>
    <tr>
        <td>
            Email:
        </td>
        <td>
            <input class="form-control" type="email" name="emp_email">
        </td>
    </tr>
    <tr>
        <td>
            Create password for the user:
        </td>
        <td>
            <input class="form-control" type="password" name="emp_pass">
        </td>
    </tr>
    <tr>
        <td>
            Add profile pic of the user:
        </td>
        <td>
            <input class="form-control" type="file" name="emp_img" accept="image/*">
        </td>
    </tr>
    <tr>
        <td>
            Date of joining:
        </td>
        <td>
            <input class="form-control" type="date" name="emp_doj">
        </td>
    </tr>
    <tr>
        <td>
            Skills:
        </td>
        <td>
            <input class="form-control" type="text" name="emp_skills">
        </td>
    </tr>
    <tr>
        <td>
            Experience (in years):
        </td>
        <td>
            <input class="form-control" type="number" name="emp_exp">
        </td>
    </tr>
</table>
<div align="center">
<input class="btn btn-primary btt" type="submit" value="SUBMIT" name="submitBtn">

<input class="btn btn-primary btt" type="reset" value="RESET" name="resetBtn">
</div>
</form>














<?php 
// function upload ()
// {
// var_dump($_FILES);
// $temp_path = $_FILES["emp_img"]["temp_name"];
// echo $temp_path;
// $url_img = "Images/".$_FILES["emp_img"]["name"];
// $final_path = $_SERVER["DOCUMENT_ROOT"]."/Projects/Employee management system/Images/".$_FILES["emp_img"]["name"];
// echo "Temporary file:", $temp_path  ;
// echo "<br>";
// echo "FInal path", $final_path;

// if ($_FILES["emp_img"]["error"] == 0)
// {
//     move_uploaded_file($temp_path,$final_path);
//     $path = "Projects/Employee management system/Images/".$_FILES["emp_img"]["name"];
//     echo $path;
//     return $path;
// }
// else
// {
//     echo "Error in uploading file";
//     return null;
// }
// }
// var_dump($_FILES);
$temp_path = $_FILES["emp_img"]["tmp_name"];
// target path
$target_path = $_SERVER["DOCUMENT_ROOT"]. "/Projects/Employee management system/Images/". $_FILES["emp_img"]["name"];
//check if any error
// echo $target_path;
if($_FILES["emp_img"]["error"]==0)
{
    move_uploaded_file($temp_path, $target_path);
    // echo "File uploaded successfully";
}
else
{
    // echo "Error in file upload";
}

$path = "../Images/user.jpg";
// var_dump($_FILES);
// echo $_FILES["emp_img"]["name"];
$path = "../Images/" . $_FILES["emp_img"]["name"];








$emp_dept = "employee";
// $emp_dept = $_POST["emp_dept"];

extract($_REQUEST);
if(isset($submitBtn))
{

    // $path = upload();
    // echo $url_img;
    
    $link=mysqli_connect("localhost","root","","employee_management_system"); 
    $qry = "insert into employee_data(emp_id,emp_name,emp_department,emp_job,emp_mob,emp_email,emp_password,emp_pic_link,emp_doj,emp_skills,emp_experience)
    values(null,'$emp_unm','$emp_dept','$emp_job','$emp_mob','$emp_email','$emp_pass','$path','$emp_doj','$emp_skills','$emp_exp');";
    $run = mysqli_query($link,$qry);
    // if($run)
    // {
    //     echo "<script>alert('Employee added successfully')</script>";
    // }
}
?>
<?php include_once'footer.php'?>
