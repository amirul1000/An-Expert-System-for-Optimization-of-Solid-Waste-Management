<?php
session_start();
require("header.php");
?>

<div id="contentwrap">
<div class="post" id="post">
<h2> Waste Forcasting System </h2><br />
<div class="entry">
<div align="center">
<form action="value.php" method="post" name="fsystem" id="fsystem">
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="username" size="35" id="username" value=""></td>
	</tr>
	<tr>
		<td>Organization</td>
		<td><input type="text" name="organization" size="35" id="organization" value=""></td>
	</tr>
	<tr>
		<td>Call Number</td>
		<td><input type="text" name="phone" size="35" id="phone" value=""></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" size="35" id="email" value=""></td>
	</tr>
	<tr>
		<td>Location</td>
		<td>
		<select name="location" id ="location">
			<option value="">Choose One</option>
			<option value="Kuala Lumpur">Kuala Lumpur</option>
			<option value="Selangor">Selangor</option>
			<option value="Johore">Johore</option>
			<option value="Negeri Sembilan">Negeri Sembilan</option>
			<option value="Penang">Penang</option>
			<option value="Kelantan">Kelantan</option>
			<option value="Kedah">Kedah</option>
			<option value="Terengganu">Terengganu</option>
			<option value="Malacca">Malacca</option>
			<option value="Pahang">Pahang</option>
			<option value="Perak">Perak</option>
			<option value="Perlis">Perlis</option>
			<option value="Sabah">Sabah</option>
			<option value="Sarawak">Sarawak</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>Area</td>
		<td><input type="text" name="area" size="35" id="area" value=""></td>
	</tr>
	<tr>
		<td>Paper</td>
		<td>
			<input type="text" name="paper" id="paper"> kg 
			<input type="text" name="paperpre" id="paperpre" size="5"> %   
		</td>
	</tr>
	<tr>
		<td>Plastic</td>
		<td>
			<input type="text" name="plastic" id="plastic"> kg 
			<input type="text" name="plasticpre"  id="plasticpre" size="5"> %  
		</td>
	</tr>
	<tr>
		<td>Food Waste</td>
		<td>
			<input type="text" name="food" id="food"> kg 
			<input type="text" name="foodpre" id="foodpre"  size="5"> %  
		</td>
	</tr>
	<tr>
		<td>Glass</td>
		<td>
			<input type="text" name="glass" id="glass"> kg 
			<input type="text" name="glasspre" id="glasspre" size="5"> %  
		</td>
	</tr>
	<tr>
		<td>Metal</td>
		<td>
			<input type="text" name="metal" id="metal"> kg 
			<input type="text" name="metalpre" id="metalpre" size="5"> %  
		</td>
	</tr>
	<tr>
		<td>Other</td>
		<td>
			<input type="text" name="other" id="other"> kg 
			<input type="text" name="otherpre" id="otherpre" size="5"> %  
		</td>
	</tr>
	<tr>
		<td>Period</td> 
		<td>
			<input type="text" name="period" id="period" size="5"> 
			<select name="period_unit" id="period_unit">
				<option value="">Choose One</option>
				<option value="Day">Day</option>
				<option value="Week">Week</option>
				<option value="Month">Month</option>
				<option value="Year">Year</option>
			</select>
		</td> 
	</tr>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Next" style="height: 25px; width: 100px"></td>
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