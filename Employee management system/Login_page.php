<?php include_once'header.php'?>
<style>
    body
    {
        background-color: slategrey;
    }
    /* From Uiverse.io by Yaya12085 */ 
.form-container {
  width: 320px;
  border-radius: 0.75rem;
  background-color: rgba(17, 24, 39, 1);
  padding: 2rem;
  color: rgba(243, 244, 246, 1);
}

.title {
  text-align: center;
  font-size: 1.5rem;
  line-height: 2rem;
  font-weight: 700;
}

.form {
  margin-top: 1.5rem;
}

.input-group {
  margin-top: 0.25rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
}

.input-group label {
  display: block;
  color: rgba(156, 163, 175, 1);
  margin-bottom: 4px;
}

.input-group input {
  width: 100%;
  border-radius: 0.375rem;
  border: 1px solid rgba(55, 65, 81, 1);
  outline: 0;
  background-color: rgba(17, 24, 39, 1);
  padding: 0.75rem 1rem;
  color: rgba(243, 244, 246, 1);
}

.input-group input:focus {
  border-color: rgba(167, 139, 250);
}

.forgot {
  display: flex;
  justify-content: flex-end;
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgba(156, 163, 175,1);
  margin: 8px 0 14px 0;
}

.forgot a,.signup a {
  color: rgba(243, 244, 246, 1);
  text-decoration: none;
  font-size: 14px;
}

.forgot a:hover, .signup a:hover {
  text-decoration: underline rgba(167, 139, 250, 1);
}

.sign {
  display: block;
  width: 100%;
  background-color: rgba(167, 139, 250, 1);
  padding: 0.75rem;
  text-align: center;
  color: rgba(17, 24, 39, 1);
  border: none;
  border-radius: 0.375rem;
  font-weight: 600;
}

.social-message {
  display: flex;
  align-items: center;
  padding-top: 1rem;
}

.line {
  height: 1px;
  flex: 1 1 0%;
  background-color: rgba(55, 65, 81, 1);
}

.social-message .message {
  padding-left: 0.75rem;
  padding-right: 0.75rem;
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: rgba(156, 163, 175, 1);
}

.social-icons {
  display: flex;
  justify-content: center;
}

.social-icons .icon {
  border-radius: 0.125rem;
  padding: 0.75rem;
  border: none;
  background-color: transparent;
  margin-left: 8px;
}

.social-icons .icon svg {
  height: 1.25rem;
  width: 1.25rem;
  fill: #fff;
}

.signup {
  text-align: center;
  font-size: 0.75rem;
  line-height: 1rem;
  color: rgba(156, 163, 175, 1);
}

</style>

<style>
  .heads
  {
    height: 100px;
    border-bottom-right-radius: 20px;
    border-bottom-left-radius: 20px;
    background-color: rgba(17, 24, 39, 1) ;
  }
</style>
<div class="heads">
  <h1 style=" padding:25px; text-align:center; color:aliceblue; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">WELCOME TO OUR SYSTEM</h1>
</div>

<?php
// $username = "Keshav"
?>
<form action="">
<div align="center" style="background-color:slategrey; height:450px; margin-top:50px;">
<div class="form-container" >
	<p class="title">Login</p>
	<form class="form">
		<div class="input-group">
			<label for="username">Enter your employee Id</label>
			<input type="text" name="username" id="username" placeholder="">
		</div>
		<div class="input-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="">
			<div class="forgot">
				
			</div>
		</div>
	</form>
	<div class="social-message">
		<div class="line"></div>
		<br>
		</button>
	</div>
	<p class="signup">Having trouble ?
        <br>    
        <br>
		<a rel="noopener noreferrer" href="#" class="">Contact support team</a>
	</p>
</div>


<a href="#"><button name="adminBtn" type="submit" style="display: block; width:320px; border-radius:10px; margin-top:5px" class="btn btn-primary">Login as Admin</button></a>
<a href="#"><button name="employeeBtn" type="submit" style="display: block; width:320px; border-radius:10px; margin-top:5px" class="btn btn-primary">Login as employee</button></a>
</div>
</form>
<?php 
$admin = "Keshav";
$admin_p = "Keshav@123";
extract($_REQUEST);
$tr =true;
$tr_ = false;
if(isset($adminBtn))
{
    // var_dump($_REQUEST);
    if($username == $admin && $password == $admin_p)
    {

      echo '<meta http-equiv="refresh" content="0;url=./Admin/homepage.php" />';
    }
    else
    {
        $tr = false;
    }
}
if(isset($employeeBtn))
{
  // $user_id= "Keshav";
  $user_id = urlencode($username);
$role = urlencode('employee');
    $link=mysqli_connect("localhost","root","","employee_management_system"); 
      $sql = "SELECT * FROM employee_data WHERE emp_id = '$username' AND emp_password = '$password'";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
       
        echo '<meta http-equiv="refresh" content="0;url=./Employee/homepage.php?user_id=' . $user_id . '" />';        $tr_ = true;
        break;
      }
}
if(!$tr_)
{
    $tr = false;
}
?>
<br>
<div align="center">
<?php
if(!$tr)
{
    echo "<div style=\"align:center; width:450px; color:white; border-radius: 5px; background-color: red;\"><h5>
    Invalid credentials or empty fields!
    </h5>
</div>";
}
?>
</div>
<br>
<br>  
<style>
  .foot
  {
    height: 70px;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    background-color:rgba(17, 24, 39, 1);
  }
  i:hover , .fa-brands:hover
  {
    color:tan;
  }
</style>
<div class="foot">
<h2 style="color:aliceblue; text-align:center; padding:10px;">
  Contact us : &nbsp; &nbsp;<a href="https://github.com/Keshavo-o"><i style="vertical-align: baseline; color:white;" class="fa-brands fa-github"></a></i>
  &nbsp;&nbsp;<i class="fa-solid fa-phone"></i>
  &nbsp;&nbsp;<i class="fa-solid fa-message"></i>
</h2>
</div>
<?php include_once'footer.php'?>