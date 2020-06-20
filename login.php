<?php
session_start();
require("config.php");
if (isset($_REQUEST['username'])&&isset($_REQUEST['password']))
 {
     $query = "SELECT * FROM login WHERE 
								  username  LIKE BINARY '".$_REQUEST["username"]."' 
								  AND password  LIKE BINARY '".$_REQUEST["password"]."'";	
								  
								  			
				
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
			$_SESSION["users_id"]   = $res[0]["id"];
			$_SESSION["username"]      = $res[0]["username"];
			//echo '<meta http-equiv="REFRESH" content="0;url=">';
			header('Location: FSystem.php');
		}							 
		else
		{
			$message="Login fail,Please verify your userid or password";
			
		}	
 }
if($_REQUEST['cmd']=="registration_success")
{
  $message ="Registration is completed successfully.Please login first";
}
require("header.php");
?>

<div id="contentwrap">
<div class="post" id="post">
<h2> Log In </h2><br />
<div class="entry">
<div align="center">
<form method="POST" action="" name="login" id="login">
<table>
     <tr>
	  	<td colspan="2"><font color="#FF0000"><?=$message?></font></td>
	 </tr>
	<tr>
		<td>Username(Email)</td>
		<td><input type="text" name="username" id="username" value=""></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" id="password" value=""></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Login" style="height: 25px; width: 100px"></td>
	</tr>
	<tr>
	 <td colspan="2" align="center">
	  	<a href="register.php">New user Register here</a>
	 </td>
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