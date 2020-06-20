<?php 
    session_start();
	require("config.php");
	$query = "SELECT entries.*,categories.cat FROM entries INNER JOIN categories ON(entries.cat_id=categories.id)
							WHERE entries.cat_id='".$_REQUEST['cat_id']."' ORDER BY order_no ASC";								
	$result = mysql_query($query,$conn);
	$i=0;
	unset($res);
	while($data = mysql_fetch_assoc($result)) 
	{
		while(list($key,$value) = each($data))
			$res[$i][$key] = $value;
		$i++;
	}		
   $content = "An expert system for selecting an
					appropriate solid waste treatment
					technology
              <table>
					<tr><td>Name</td><td>".$_SESSION['username']."</td></tr>
					<tr><td>organization</td><td>".$_SESSION['organization']."</td></tr>
					<tr><td>Phone</td><td>".$_SESSION['phone']."</td></tr>
					<tr><td>Email</td><td>".$_SESSION['email']."</td></tr>
   			  </table>
			  <img src=\"temp/report.png\" style=\"width:100px\" style=\"height:100px\"><br>
			  <img src=\"temp/report2.png\" style=\"width:100px\" style=\"height:100px\">";
	for($i=0;$i<count($res);$i++)
		{
		
			$content .= '<h2>'.trim($res[$i]['subject']).'</h2><br>
				    <p>'.trim($res[$i]['body'] ).'</p>
					';
			
		}
	//Print pdf
    require_once(dirname(__FILE__).'/html2pdf_v4.03/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output($res[0]['cat'].'.pdf');
		
?>  
	