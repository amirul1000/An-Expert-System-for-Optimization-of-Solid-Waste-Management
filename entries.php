<?php
require("header.php");
?>
<div id="contentwrap">
		<?php 
		$where = "";
		if(isset($_REQUEST['cat_id']))
		{
		 $where .= "cat_id='".$_REQUEST['cat_id']."'";
		}
		if(isset($_REQUEST['order_no']))
		{
		  $order_no = $_REQUEST['order_no'];
		}
		else
		{
		  $order_no = 1;
		} 
		 $where .= " AND order_no='".$order_no."'";
		
		$query = "SELECT entries.*,categories.cat FROM entries INNER JOIN categories ON(entries.cat_id=categories.id)
								WHERE  $where ORDER BY order_no ASC";								
		$result = mysql_query($query,$conn);
		$i=0;
		unset($res);
		while($data = mysql_fetch_assoc($result)) 
		{
			while(list($key,$value) = each($data))
				$res[$i][$key] = $value;
			$i++;
		}		
		
     ?>		
		<div class="post" id="post">
			<h2><?php echo nl2br($res[0]['subject']); ?></h2>
			<br />
				<div class="entry">
				    <p>
						<?php 
							echo $res[0]['body'] ;
						?>
					</p>
				</div>
			<ul class="hoverbox">
				<li>
				<a href="#"><img src="img/wast_glob.jpg" alt="description" /></a>
				
				<a href="#"><img src="img/wast_glob1.jpg" alt="description" /></a>
				</li>
			</ul>	
				<?php
				   $query = "SELECT entries.*,categories.cat FROM entries INNER JOIN categories ON(entries.cat_id=categories.id)
								WHERE  entries.cat_id='".$_REQUEST['cat_id']."' AND order_no>".$order_no." ORDER BY entries.order_no ASC";								
								
					$result = mysql_query($query,$conn);
					$i=0;
					unset($res);
					while($data = mysql_fetch_assoc($result)) 
					{
						while(list($key,$value) = each($data))
							$res[$i][$key] = $value;
						$i++;
					}		
					
				  if(count($res)>0)
				  {
				?>
				<form  action="entries.php">
					<input type="hidden" name="cat_id" value="<?=$_REQUEST['cat_id']?>"> 
					<input type="hidden" name="order_no" value="<?=$res[0]['order_no']?>"> 
					<input type="submit" value="Click Next" style="height: 25px; width: 100px">
				</form>
				<?php
				}
				else
				{
				?>
				<form  method="get"  action="print_entries.php">
				    <input type="hidden" name="cat_id" value="<?=$_REQUEST['cat_id']?>"> 
					<input type="hidden" name="order_no" value="<?=$order_no?>"> 
					<input type="submit" value="Print">
				</form>
				<?php
				}
				?>
				<br />
			<a href="report.php">Back to Report</a>
		</div>
	    
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
	<?php
		$query = "SELECT entries.*,categories.cat FROM entries INNER JOIN categories ON(entries.cat_id=categories.id)
								WHERE  entries.cat_id='".$_REQUEST['cat_id']."' ORDER BY entries.order_no ASC";								
		$result = mysql_query($query,$conn);
		$i=0;
		unset($res);
		while($data = mysql_fetch_assoc($result)) 
		{
			while(list($key,$value) = each($data))
				$res[$i][$key] = $value;
			$i++;
		}		
	?>		
	<h3><?php echo $res[0]['cat']; ?></h3>
	<?php
	  for($i=0;$i<count($res);$i++)
		{	
	?>
	<ul><li><a href="entries.php?cat_id=<?=$_REQUEST['cat_id']?>&order_no=<?=$res[$i]['order_no']?>"><?php echo $res[$i]['subject']; ?> </a></li></ul>
	<?php
	   }
	?>
</div> 
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