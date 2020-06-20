<?php
session_start();
require("header.php");
?>
<div id="contentwrap">
	<?php
			
			$paperP = 0.22;
			$plasticP = 0.30;
			$foodP = 0.05;
			$glassP = 0.20;
			$metalP = 2.00;
			$otherP = 0.15;
	
	    if($_REQUEST['cmd']=="reculculate")
		{
			if(!empty($_REQUEST['paperUP']))
			{
				$_SESSION['paperUP'] = $_REQUEST['paperUP'];
				$paperUP = $_SESSION['paperUP'];
			}
			else
			{
			   unset($_SESSION['paperUP']);
			}
			
			if(!empty($_REQUEST['plasticUP']))
			{
				$_SESSION['plasticUP'] = $_REQUEST['plasticUP'];
				$plasticUP = $_SESSION['plasticUP'];
			}
			else
			{
			   unset($_SESSION['plasticUP']);
			}
			
			if(!empty($_REQUEST['foodUP']))
			{
				$_SESSION['foodUP'] = $_REQUEST['foodUP'];
				$foodUP = $_SESSION['foodUP'];
			}
			else
			{
			   unset($_SESSION['foodUP']);
			}
			
			if(!empty($_REQUEST['glassUP']))
			{
				$_SESSION['glassUP'] = $_REQUEST['glassUP'];
				$glassUP = $_SESSION['glassUP'];
			}
			else
			{
			   unset($_SESSION['glassUP']);
			}
			
			if(!empty($_REQUEST['metalUP']))
			{
				$_SESSION['metalUP'] = $_REQUEST['metalUP'];
				$metalUP = $_SESSION['metalUP'];
			}
			else
			{
			   unset($_SESSION['metalUP']);
			}
			
			if(!empty($_REQUEST['otherUP']))
			{
				$_SESSION['otherUP'] = $_REQUEST['otherUP'];
				$otherUP = $_SESSION['otherUP'];
			}
			else
			{
			   unset($_SESSION['otherUP']);
			}
		}
		else
		{
		
			$_SESSION['paperP']   = $paperP;
			$_SESSION['plasticP'] = $plasticP;
			$_SESSION['foodP']    = $foodP;
			$_SESSION['glassP']   = $glassP;
			$_SESSION['metalP']   = $metalP;
			$_SESSION['otherP']   = $otherP;
			
			unset($_SESSION['paperUP']);
			unset($_SESSION['plasticUP']);
			unset($_SESSION['foodUP']);
			unset($_SESSION['glassUP']);
			unset($_SESSION['metalUP']);
			unset($_SESSION['otherUP']);

		}
		
		//$_SESSION['$period'] = "red";
		//period
		if(isset($_REQUEST['period']))
		{
			$_SESSION['period'] = $_REQUEST['period'];
		}
		if(isset($_REQUEST['period_unit']))
		{
			$_SESSION['period_unit'] = $_REQUEST['period_unit'];
		}
		$period = $_SESSION["period"];
		$period_unit =$_SESSION["period_unit"];
		//paper		
		if(isset($_REQUEST['paper']))
		{
			$_SESSION['paper'] = $_REQUEST['paper'];
		}
		if(isset($_REQUEST['paperpre']))
		{
			$_SESSION['paperpre'] = $_REQUEST['paperpre'];
		}
		$paper = $_SESSION["paper"];
		$paperpre =$_SESSION["paperpre"];
		//plastic
		
		if(isset($_REQUEST['plastic']))
		{
			$_SESSION['plastic'] = $_REQUEST['plastic'];
		}
		if(isset($_REQUEST['plasticpre']))
		{
			$_SESSION['plasticpre'] = $_REQUEST['plasticpre'];
		}
		$plastic = $_SESSION["plastic"];
		$plasticpre =$_SESSION["plasticpre"];
		//food
		
		if(isset($_REQUEST['food']))
		{
			$_SESSION['food'] = $_REQUEST['food'];
		}
		if(isset($_REQUEST['foodpre']))
		{
			$_SESSION['foodpre'] = $_REQUEST['foodpre'];
		}
		$food  = $_SESSION["food"];
		$foodpre= $_SESSION["foodpre"];		
		//glass
		
		if(isset($_REQUEST['glass']))
		{
			$_SESSION['glass'] = $_REQUEST['glass'];
		}
		if(isset($_REQUEST['glasspre']))
		{
			$_SESSION['glasspre'] = $_REQUEST['glasspre'];
		}
		$glass = $_SESSION["glass"];
		$glasspre= $_SESSION["glasspre"];
		//metal
		
		if(isset($_REQUEST['metal']))
		{
			$_SESSION['metal'] = $_REQUEST['metal'];
		}
		if(isset($_REQUEST['metalpre']))
		{
			$_SESSION['metalpre'] = $_REQUEST['metalpre'];
		}
		$metal = $_SESSION["metal"];
		$metalpre =$_SESSION["metalpre"];
		//other
		
		if(isset($_REQUEST['other']))
		{
			$_SESSION['other'] = $_REQUEST['other'];
		}
		if(isset($_REQUEST['otherpre']))
		{
			$_SESSION['otherpre'] = $_REQUEST['otherpre'];
		}			
		$other = $_SESSION["other"];
		$otherpre =$_SESSION["otherpre"];
		
		$epaper = round(fvalue($paper,$paperpre,$period),2);
		$_SESSION['epaper'] = $epaper;
		$eplastic = round(fvalue($plastic,$plasticpre,$period),2);
		$_SESSION['eplastic'] = $eplastic;
		$efood = round(fvalue($food,$foodpre,$period),2);
		$_SESSION['efood'] = $efood;
		$eglass = round(fvalue($glass,$glasspre,$period),2);
		$_SESSION['eglass'] = $eglass;
		$emetal = round(fvalue($metal,$metalpre,$period),2);
		$_SESSION['emetal'] = $emetal;
		$eother = round(fvalue($other,$otherpre,$period),2);
		$_SESSION['eother'] = $eother;
		
		/*$epaper1 = if (isset($POST["submit"]) && ($_POST["paperUP"]))
						{ userval($epaper,$_POST["paperUP"])} 
						else { $epaper = round(fvalue($paper,$paperpre,$period),2);} */
	   		if(!empty($_REQUEST['username']))
			{
				$_SESSION['username'] = $_REQUEST['username'];
				
			}			
			
			if(!empty($_REQUEST['organization']))
			{
				$_SESSION['organization'] = $_REQUEST['organization'];
				
			}			
						
			if(!empty($_REQUEST['phone']))
			{
				$_SESSION['phone'] = $_REQUEST['phone'];
				
			}		
			
			if(!empty($_REQUEST['email']))
			{
				$_SESSION['email'] = $_REQUEST['email'];
				
			}										
						
	?>
		<div class="post" id="post">
			<h2> Forcasteing Values</h2>
			<div>
			  <h6><?=$_SESSION['period']?> <?=$_SESSION['period_unit']?></h6>
			</div>
<div class="entry">
	<form name="fvalue" id="fvalue" method ="post" action ="">
	<table border="0" bordercolor="#FFF" style="background-color:#FFF" width="570" cellpadding="2" cellspacing="2">
		<tr>
			<td><strong>Waste Type</strong></td>
			<td><strong>Waste</strong></td>
			<td><strong>Price</strong></td>
			<td><strong>User Price</strong></td>
			<td><strong>Total</strong></td>
		</tr>
		<tr>
			<td><strong>Paper</strong></td>
			<td><?php echo $epaper; ?> kg</td>
			<td>RM 0.22</td>
			<td><input type="text" name="paperUP" size="8" value="<?=$_SESSION['paperUP']?>"></td>
			<td>
			   <?php 
				  if($_REQUEST['cmd']=="reculculate" && isset($_SESSION['paperUP']))
					{   
					  $_SESSION['epaper_total'] = round(($epaper * $paperUP),2); 
					  echo round(($epaper * $paperUP),2);
					}
					else
					{  
					    $_SESSION['epaper_total'] = round(($epaper * $paperP),2);            
						echo round(($epaper * $paperP),2);
					}
				?>
			</td>
		</tr>
		<tr>
			<td><strong>Plastic</strong></td>
			<td><?php echo $eplastic; ?> kg</td>
			<td>RM 0.30</td>
			<td><input type="text" name="plasticUP" size="8" value="<?=$_SESSION['plasticUP']?>"></td>
			<td>
			   <?php 
				  if($_REQUEST['cmd']=="reculculate" && isset($_SESSION['plasticUP']))
					{  
					  $_SESSION['epaper_total'] = round(($eplastic * $plasticUP),2);   
					  echo round(($eplastic * $plasticUP),2); 
					}
					else
					{  
					    $_SESSION['eplastic_total'] = round(($eplastic * $plasticP),2);             
						echo round(($eplastic * $plasticP),2); 
					}
				?>
			</td>
		</tr>
		<tr>
			<td><strong>Food Waste</strong></td>
			<td><?php echo $efood; ?> kg</td>
			<td>RM 0.05</td>
			<td><input type="text" name="foodUP" size="8" value="<?=$_SESSION['foodUP']?>"></td>
			<td>
			   <?php 
				  if($_REQUEST['cmd']=="reculculate" && isset($_SESSION['foodUP']))
					{ 
					   $_SESSION['efood_total'] = round(($efood * $foodUP),2);    
					   echo round(($efood * $foodUP),2);  
					}
					else
					{   
					    $_SESSION['efood_total'] = round(($efood * $foodP),2);             
						echo round(($efood * $foodP),2); 
					}
				?>
			</td>
		</tr>
		<tr>
			<td><strong>Glass</strong></td>
			<td><?php echo $eglass; ?> kg</td>
			<td>RM 0.20</td>
			<td><input type="text" name="glassUP" size="8" value="<?=$_SESSION['glassUP']?>"></td>
			<td>
			   <?php 
				  if($_REQUEST['cmd']=="reculculate" && isset($_SESSION['glassUP']))
					{  
					  $_SESSION['eglass_total'] = round(($eglass * $glassUP),2);  
					  echo round(($eglass * $glassUP),2);
					}
					else
					{  
					    $_SESSION['eglass_total'] = round(($eglass * $glassP),2);            
						echo round(($eglass * $glassP),2);
					}
				?>
			</td>
		</tr>
		<tr>
			<td><strong>Metal</strong></td>
			<td><?php echo $emetal; ?> kg</td>
			<td>RM 2.00</td>
			<td><input type="text" name="metalUP" size="8" value="<?=$_SESSION['metalUP']?>"></td>
			<td>
			   <?php 
				  if($_REQUEST['cmd']=="reculculate" && isset($_SESSION['metalUP']))
					{ 
					  $_SESSION['emetal_total'] = round(($emetal * $metalUP),2);   
					  echo round(($emetal * $metalUP),2); 
					}
					else
					{   
					   $_SESSION['emetal_total'] = round(($emetal * $metalP),2);             
					   echo round(($emetal * $metalP),2); 
					}
				?>
			</td>
		</tr>
		<tr>
			<td><strong>Other</strong></td>
			<td><?php echo $eother; ?> kg</td>
			<td>RM 0.15</td>
			<td><input type="text" name="otherUP" size="8" value="<?=$_SESSION['otherUP']?>"></td>
			<td>
			   <?php 
				  if($_REQUEST['cmd']=="reculculate" && isset($_SESSION['otherUP']))
					{ 
					  $_SESSION['eother_total'] = round(($eother * $otherUP),2);  
					  echo round(($eother * $otherUP),2);
					    
					}
					else
					{    
					  $_SESSION['eother_total'] = round(($eother * $otherP),2);            
					  echo round(($eother * $otherP),2);
						 
					}
				?>
			</td>
		</tr>
	</table>
	<input type="hidden" name="cmd" value="reculculate">
	<input type="submit" name="reculculate" value="Reculculate" style="height: 25px; width: 100px">
</form>
<p style="font-family:verdana,arial,sans-serif;font-size:10px;"></p>



				</div>
				<ul class="hoverbox">
<!--
<li>
<a href="#"><img src="img/photo01.jpg" alt="description" /></a>
</li> -->
<li>
<a href="#"><img src="img/wast_glob.jpg" alt="description" /></a>

<a href="#"><img src="img/wast_glob1.jpg" alt="description" /></a>
</li>
<br />
<br />

<form action="report.php">
    <input type="Submit" value="Click Next" style="height: 25px; width: 100px">
</form>

<br />
</ul>
			
		</div>
			<div class="post-bot"></div>

				<div class="in">
                
				</div>
	
</div>
<!--
<div id="sidebar">
 <div class="side-widget widget_minimeta">
	<h3>Login </h3>
	<ul><li><a href="login.php">Login </a></li></ul>
	<ul><li><a href="register.php">Register </a></li></ul>
	<ul><li><a href="FSystem.php">Forecasting System </a></li></ul>
 </div>
 <div class="widget-bot"></div>
 -->
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
 <div class="widget-bot"></div>
</div>

<?php
require("footer.php");
?>
