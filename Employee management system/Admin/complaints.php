<?php include_once'header.php'?>
<?php include_once'nav_bar.php'?>
<h2 align="center" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
COMPLAINTS
</h2>
<hr size="10" color="black">
<button type="button" style="width:150px; float: right; margin-right: 14px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#notificationModal">
  Manage 
</button>


<form action="" method="post">
<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notificationModalLabel">Complaints</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-dark table-hover">
            <tr>
                <td>
                    Enter complaint ID:
                </td>
                <td>
        <input type="number" min="1" name="temp" placeholder="Complaint Id">
        </td>
        </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Take Action</button>
        <button type="submit" name="Btn" class="btn btn-primary">Resolved</button>
      </div>
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
    $qry = "UPDATE complaint_data SET status = 'Resolved' WHERE complaint_id = '$temp';";
    mysqli_query($link,$qry);
    mysqli_close($link);
}
?>








<br>



<div class="container mt-5">
    <div class="row">
        <?php
        // Connect to the database
        $link = mysqli_connect("localhost", "root", "", "complaints");

        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Define the query
        $query = "SELECT * FROM complaint_data";

        // Execute the query
        $result = mysqli_query($link, $query);

        // Check if there are results
        if (mysqli_num_rows($result) > 0) {
            // Loop through and output the data
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">Complaint ID: ' . $row["complaint_id"] . '</h5>';
                echo '<p class="card-text"><strong>Submitted by:</strong> ' . $row["name"] . '</p>';
                echo '<p class="card-text"><strong>Complaint:</strong> ' . $row["complaint"] . '</p>';
                echo '<p class="card-text"><strong>Date:</strong> ' . $row["date_of_complaint"] . '</p>';
                echo '<p class="card-text"><strong>Status:</strong> ' . $row["status"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="col-12">';
            echo '<div class="alert alert-info" role="alert">';
            echo 'No complaints found.';
            echo '</div>';
            echo '</div>';
        }

        // Close the connection
        mysqli_close($link);
        ?>
    </div>
</div>

<?php include_once'footer.php'?>