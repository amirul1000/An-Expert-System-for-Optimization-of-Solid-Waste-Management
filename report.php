<?php
		session_start();
		require("header.php");
		set_time_limit(0);
		include ("jpgraph/src/jpgraph.php");						
	    include ("jpgraph/src/jpgraph_line.php");  
		
?>
<div id="contentwrap">
<div class="post" id="post">
<div class="entry">
<table width="100%">
  <tr>
  	 <td align="center">
	 	<a href="print.php">Print</a>
	 </td>
  </tr>
  <tr>
     <td align="center">
	<?php		
		if(isset($_SESSION['paperUP']))
		{
		 	$paper = $_SESSION['paperUP']; 
		}
		else
		{
		  $paper = $_SESSION['paperP']; 
		}
		
		if(isset($_SESSION['plasticUP']))
		{
		 	$plastic = $_SESSION['plasticUP']; 
		}
		else
		{
		  $plastic = $_SESSION['plasticP']; 
		}
		
		if(isset($_SESSION['foodUP']))
		{
		 	$food = $_SESSION['foodUP']; 
		}
		else
		{
		  $food = $_SESSION['foodP']; 
		}
		
		if(isset($_SESSION['glassUP']))
		{
		 	$glass = $_SESSION['glassUP']; 
		}
		else
		{
		  $glass = $_SESSION['glassP']; 
		}
		
		if(isset($_SESSION['metalUP']))
		{
		 	$metal = $_SESSION['metalUP']; 
		}
		else
		{
		  $metal = $_SESSION['metalP']; 
		}
		if(isset($_SESSION['otherUP']))
		{
		 	$other = $_SESSION['otherUP']; 
		}
		else
		{
		  $other = $_SESSION['otherP']; 
		}
		
		
		$datay1 = array($_SESSION['epaper'],$_SESSION['eplastic'],$_SESSION['efood'],$_SESSION['eglass'],$_SESSION['emetal'],$_SESSION['eother']);
		$datay2 = array($paper,$plastic,$food,$glass,$metal,$other);
		$datay3 = array($_SESSION['epaper_total'],$_SESSION['eplastic_total'],$_SESSION['efood_total'],$_SESSION['eglass_total'],$_SESSION['emetal_total'],$_SESSION['eother_total']);
		$products = array("Paper","Plastic","Food Waste","Glass","Metal","Other");
		// Setup the graph
		$graph = new Graph(550,550);
		$graph->SetScale("textlin");
		
		//$theme_class=new UniversalTheme;
		
		//$graph->SetTheme($theme_class);
		$graph->img->SetAntiAliasing(false);
		$graph->title->Set('Waste Forecasting in KG');
		$graph->SetBox(false);
		
		$graph->img->SetAntiAliasing();
		
		$graph->yaxis->HideZeroLabel();
		$graph->yaxis->HideLine(false);
		$graph->yaxis->HideTicks(false,false);
		
		$graph->xgrid->Show();
		$graph->xgrid->SetLineStyle("solid");
		$graph->xaxis->SetTickLabels($products);
		$graph->xgrid->SetColor('#E3E3E3');
		
		// Create the second line
		$p2 = new LinePlot($datay1);
		$graph->Add($p2);
		$p2->SetColor("#B22222");
		$p2->SetLegend('Waste KG');
		
		// Create the first line
		/*$p1 = new LinePlot($datay2);
		$graph->Add($p1);
		$p1->SetColor("#6495ED");
		$p1->SetLegend('Price');*/
		
		// Create the third line
		/*$p3 = new LinePlot($datay3);
		$graph->Add($p3);
		$p3->SetColor("#FF1493");
		$p3->SetLegend('Total');*/
		
		$graph->legend->SetFrameWeight(1);
		
		// Output line
		$file  ="temp/report.png";		
		$im = $graph->Stroke($file);
		echo '<img src="'.$file.'">';
		/*************************************************
		*******************************************************/
		// Setup the graph
		$graph2 = new Graph(550,550);
		$graph2->SetScale("textlin");
		
		//$theme_class=new UniversalTheme;
		
		//$graph2->SetTheme($theme_class);
		$graph2->img->SetAntiAliasing(false);
		$graph2->title->Set('Profit Forecasting in RM');
		$graph2->SetBox(false);
		
		$graph2->img->SetAntiAliasing();
		
		$graph2->yaxis->HideZeroLabel();
		$graph2->yaxis->HideLine(false);
		$graph2->yaxis->HideTicks(false,false);
		
		$graph2->xgrid->Show();
		$graph2->xgrid->SetLineStyle("solid");
		$graph2->xaxis->SetTickLabels($products);
		$graph2->xgrid->SetColor('#E3E3E3');
		
		// Create the second line
		/*$p2 = new LinePlot($datay1);
		$graph2->Add($p2);
		$p2->SetColor("#B22222");
		$p2->SetLegend('Waste KG');*/
		
		// Create the first line
		/*$p1 = new LinePlot($datay2);
		$graph2->Add($p1);
		$p1->SetColor("#6495ED");
		$p1->SetLegend('Price');*/
		
		$p3 = new LinePlot($datay3);
		$graph2->Add($p3);
		$p3->SetColor("#FF1493");
		$p3->SetLegend('Total');
		
		$graph2->legend->SetFrameWeight(1);
		
		// Output line
		$file2  ="temp/report2.png";		
		$im = $graph2->Stroke($file2);
		echo '<img src="'.$file2.'">';
	?>
  </td>
 </tr>
</table>
</div>
</div>
<div class="in">          
				</div>
</div>
<div id="sidebar">
<div class="side-widget widget_minimeta">
<h3>Forcasting Modules </h3>
<?php	
	  //if(basename($_SERVER['REQUEST_URI'])=="report.php")
	//  {
	  
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
	<ul><li><a href="entries.php?cat_id=<?=$res[$i]['id']?>&order_no=1"><?=$res[$i]['cat']?></a></li></ul>
<?php
		}
	//  }
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
<?php
require("footer.php");
?>

