<?php include_once'header.php'?>
<?php include_once'nav_bar.php'?>
<h2 align="center" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
    Please explain your problem
</h2>

<form method="post">
    <textarea name="description" cols="30" rows="10" required></textarea><br>
    <input type="submit" value="Submit">
</form>
<?php
extract($_REQUEST);
?>
<?php include_once'footer.php'?>