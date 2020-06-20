<?php
require("header.php");
?>
<div id="contentwrap">
		<?php 
			$sql = "select * from entries where id = 5";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result) 
		?>
		<div class="post" id="post">
			<h2> Welcome to Forecasting system</h2>
			<br />
			<ul class="hoverbox">
				<li>
					<a href="#">
						<img src="img/fron.jpg" alt="description" />
					</a>
				</li> 
		     </ul>
				<div class="entry">
				    <p>
					<?php 
						echo nl2br($row['body']);
					?>
					</p>
				</div>
			<ul class="hoverbox">
				<li>
				<a href="#"><img src="img/wast_glob.jpg" alt="description" /></a>
				
				<a href="#"><img src="img/wast_glob1.jpg" alt="description" /></a>
				</li>
				<form action="http://localhost/wms/login.php">­ 
					<input type="Submit" value="Click Next">
				</form>
				<br />
			</ul>
		</div>
	   <div class="post-bot"></div>
       <div class="in"></div>
</div>
<!--

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