<?php include_once'header.php'?>
<?php include_once'nav_bar.php'?>
<style>
        /* body {
            background-color: #343a40;
            color: #ffffff;
        } */
        .container {
            margin-top: 30px;
        }
        .table {
            background-color: #495057;
            border-radius: 0.25rem;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .table thead th {
            background-color: #6c757d;
        }
    </style>


<?php 

include_once 'database_conn.php';
$qry = "select * from leave_applications;";
$resultset = mysqli_query($link,$qry);
?>

<form action="" method="post">
<div class="container">
        <h2 class="text-center">Leave Applications</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee ID</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Leave Type</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Reason</th>
                    <th>Submitted At</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
        // $x = 1; 
        while($row = mysqli_fetch_assoc($resultset)) 
        {
            // $x = $x+1;
            $id = $row['id'];
            $emp_id = $row['employee_id'];
            $emp_name = $row['employee_name'];
            $department = $row['department'];
            $leave_type = $row['leave_type'];
            $start_date = $row['start_date'];
            $end_date = $row['end_date'];
            $reason = $row['reason'];
            $submitted_at = $row['submitted_at'];
            $status = $row['status'];

        ?>
        <!-- Sample Data -->
         <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $emp_id;?></td>
                    <td><?php echo $emp_name;?></td>
                    <td><?php echo $department;?></td>
                    <td><?php echo $leave_type;?></td>
                    <td><?php echo $start_date;?></td>
                    <td><?php echo $end_date;?></td>
                    <td><?php echo $reason;?></td>
                    <td><?php echo $submitted_at;?></td>
                    <td><?php echo $status;?></td>
                    <td>
                        <select name="status" class="form-select">
                            <option value="" selected disabled>--select--</option>
                            <option value="Approved">Approve</option>
                            <option value="Rejected">Reject</option>
                        </select>
                    </td>
                    <td>
                    
                        <button type="submit" class="btn btn-primary" name="submitBtn">Submit</button>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    </form>
    <?php
    extract($_REQUEST);
    if(isset($submitBtn))
    {
        // var_dump($_REQUEST);
        $qry = "UPDATE leave_applications SET status = '$status' WHERE id = '$id';";
        mysqli_query($link,$qry);
        mysqli_close($link);
    }
    ?>
<?php include_once'footer.php'?>