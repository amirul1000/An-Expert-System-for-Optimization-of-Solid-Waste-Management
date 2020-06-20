<?php
require("config.php");
if (isset($_REQUEST['email'])&&isset($_REQUEST['password']))
 {
    if(!is_email_exits($_REQUEST['email'],$conn))
	{
		if(strlen($_REQUEST['password'])>0)
		{
			if($_REQUEST['password']==$_REQUEST['repassword'])
			{
				 $username = $_REQUEST['email'];
				 $password = $_REQUEST['password'];
				 $query = "INSERT INTO login(username,password) VALUES('$username','$password')";	
				 $result = mysql_query($query,$conn);
				 if(mysql_affected_rows($conn)>0)
				 {
					 header('Location: login.php?cmd=registration_success');
				 }
			 }
			 else
			{
			  $message ="Password mismatch";
			}	 
		}
	}
	else
	{
	   $message ="Email is already exists";
	}	
 }
function is_email_exits($username,$conn)
{
  $query = "SELECT * FROM login WHERE 
								  username  LIKE BINARY '".$username."'";	
		$result = mysql_query($query,$conn);
		$i=0;
		while($data = mysql_fetch_assoc($result)) 
		{
			while(list($key,$value) = each($data))
				$res[$i][$key] = $value;
			$i++;
		}				
		if(count($res)>0)
		{
		  return true;
		}
  return false;		
} 
require("header.php");
?>
<div id="contentwrap">
<div class="post" id="post">
<h2> Registration </h2><br />
<div class="entry">
<div align="center">
<form action="<?php echo $_POST['self']; ?>" method="post" name="regdform" id="regdform">
<table border="0">
    <tr><td colspan="2" align="center"><font color="#FF0000"><?=$message?></font></td></tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" id="email" value="<?=$_REQUEST['email']?>"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" id="password"></td>
	</tr>
	<tr>
		<td>Retype Password</td>
		<td><input type="password" name="repassword" id ="repassword"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Register" style="height: 25px; width: 100px"></td>
	</tr>
</table>
</form>
</div>
</div>
</div>
<div class="post-bot"></div>

				<div class="in">
                
				</div>
</div>
<!--<div id="sidebar">
 <div class="side-widget widget_minimeta">
<h3>Login </h3>
<ul><li><a href="login.php">Login </a></li></ul>
<ul><li><a href="register.php">Register </a></li></ul>
<ul><li><a href="FSystem.php">Forecasting System </a></li></ul>
<ul><li><a href="value.php">Forecasting Values </a></li></ul>
 </div>
 <div class="widget-bot"></div>-->
 <div id="sidebar">
	<div class="side-widget widget_minimeta">
		<h3>Gallery </h3>
		<ul class="hoverbox">
			<li>
				<a href="#"><img src="img/photo04.jpg" alt="description" /></a>
			</li>
			<li>
				<a href="#"><img src="img/photo03.jpg" alt="description" /></a>
			</li>
		</ul>
	</div>
</div> 
 
</div>
<?php
require("footer.php");
?>