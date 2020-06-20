<?php
require("config.php");
require("function.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<link rel="stylesheet" href="stylesheet.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<!-- slider start here -->

<!-- slider end here -->
<title><?php echo $config_blogname; ?></title>
</head>
<body>
<div id="mainwrap">
<div id="header">
<div class="alignleft"><ul class="hoverbox">
			<li>
				<a href="#"><img src="img/logo.jpg" alt="description" /></a>
			</li>
			
		</ul> </div>
 <div id="blogtitle">
	<h4><?php echo $config_blogname; ?></h4>
 </div>
</div>
<div id="top">
<!-- slider start here -->

<!-- slider end here -->
<!--	<li class="page_item">
	<a href="index.php">Home</a> 
	</li>
	<li class="page_item">
	<a href="login.php">Enter</a> 
	</li> -->
	<!--<?php	
	  if(basename($_SERVER['REQUEST_URI'])=="report.php")
	  {
	  
	     $query = "SELECT categories.* FROM categories ORDER BY cat ASC";								
			$result = mysql_query($query,$conn);
			$i=0;
			while($data = mysql_fetch_assoc($result)) 
			{
				while(list($key,$value) = each($data))
					$res[$i][$key] = $value;
				$i++;
			}		
			$i=0;	
		for($i=0;$i<count($res);$i++)
		{	
	  ?>
	  <li class="page_item">
		<a href="javascript:void()" onClick="window.open('description.php?cat_id=<?=$res[$i]['id']?>', 'mywindow','location=1,status=1,scrollbars=1, width=800,height=600');"><?=$res[$i]['cat']?></a> 
	  </li>	  
	  <?php
		}
	  }
	?>-->
</ul>
</div> 
