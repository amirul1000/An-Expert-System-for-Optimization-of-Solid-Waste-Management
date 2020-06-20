<?php
		session_start();
		require("header.php");
		set_time_limit(0);
		include ("jpgraph/src/jpgraph.php");						
	    include ("jpgraph/src/jpgraph_line.php");  
		
?>
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
		$graph = new Graph(600,500);
		$graph->SetScale("textlin");
		
		//$theme_class=new UniversalTheme;
		
		//$graph->SetTheme($theme_class);
		$graph->img->SetAntiAliasing(false);
		$graph->title->Set('Filled Y-grid');
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
		$p1 = new LinePlot($datay2);
		$graph->Add($p1);
		$p1->SetColor("#6495ED");
		$p1->SetLegend('Price');
		
		// Create the third line
		$p3 = new LinePlot($datay3);
		$graph->Add($p3);
		$p3->SetColor("#FF1493");
		$p3->SetLegend('Total');
		
		$graph->legend->SetFrameWeight(1);
		
		// Output line
		$file  ="temp/report.png";		
		$im = $graph->Stroke($file);
		echo '<img src="'.$file.'">';
	?>
  </td>
 </tr>
</table>
<?php
require("footer.php");
?>

