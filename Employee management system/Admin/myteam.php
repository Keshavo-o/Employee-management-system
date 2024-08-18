<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

    </style>
</head>
<body style="background-color:darkgrey;">
<?php include_once'nav_bar.php'?>



<!-- <script>
    function searchRedirect() {
    var query = document.getElementById('searchQuery').value.toLowerCase();

    // Define your search terms and corresponding redirect URLs
    var searchTerms = {
        "example": "example.html",
        "about": "about.html",
        "contact": "contact.html"
        // Add more search terms and corresponding URLs as needed
    };

    // Check if the query matches any search term
    if (searchTerms[query]) {
        window.location.href = searchTerms[query];
    } else {
        alert("Search query not found.");
    }
}

</script> -->



<div class="admin">

<div class="container my-5">
<div>
    <h1 class="heading-container" align="center">
        Administrators
    </h1>
</div>
    <div class="row ">
    <div class="col row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                <div class="card text-bg-dark h-100 ">
                    <img src="../Images/ryan.jpeg" class="card-img-top" alt="Card Image <?php echo $x; ?>">
                    <div class="card-body" style="text-align: center;">
                        <h5 class="card-title">Keshav</h5>
                        <p class="card-text"></p>
                        <a href="./edit_profile_a.php?r=Keshav" class="btn btn-primary" style="width: 100%;">More details</a>
                    </div>
                </div>
            </div>
    </div>
    </div>
</div>
    <hr size="10" color="black">





    
<?php 

include_once 'database_conn.php';
$qry = "select * from employee_data;";
$resultset = mysqli_query($link,$qry);
?>
<div class="container my-5 ">
<h1 class="heading-container" align="center">
        Employees
    </h1>
</div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <?php
        $x = 1; 
        while($row = mysqli_fetch_assoc($resultset)) 
        {
            $x = $x+1;
            $name = $row['emp_name'];
            $department = $row['emp_department'];
            $id=$row['emp_id'];
            $img = $row['emp_pic_link'];

        ?>
            <div class="col">
                <div class="card text-bg-dark h-100 " style="text-align: center;">
                    <img src="<?php echo  $img; ?>" class="card-img-top img-thumbnail" alt="Card Image <?php echo $x; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo  $name; ?></h5>
                        <p class="card-text"><?php echo $id; ?><br>
                        <?php echo $department; ?><br>
                    </p>
                        <a href="./edit_profile.php?r=<?php echo $row['emp_id'];?>" class="btn btn-primary" style="width: 100%;">More details</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<br>
<br>
<div align="center" style="margin-bottom: 10px;">
<a href="create_an_employee.php"><button style="width: 250px;" class="btn btn-primary">Add an employee</button></a>
<a href=""><button class="btn btn-secondary" style="width: 250px;">Add an admin</button></a>
</div>
<?php include_once'footer.php'?>