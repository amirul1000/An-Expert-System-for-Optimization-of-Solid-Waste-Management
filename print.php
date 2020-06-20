<?php 
session_start();
include('fpdf/fpdf.php');
include ("jpgraph/src/jpgraph.php");
include ("jpgraph/src/jpgraph_line.php");
	
class PDF extends FPDF
{
    function BasicTable()
    {      
	    //Report summary
        //Logo and header
        $this->SetFont('Times','B',16);
        $x = $this->GetX()+200/5;
        $y = $this->GetY()+10;
        $this->SetXY($x,$y);
        $this->Write(6,"Waste Forecasting System");
        $this->SetFont('Times','',11);
        $y = $this->GetY()+5;
        $this->SetXY($x,$y);
        $this->Write(12,date("F j, Y, g:i a"));
        //$x = 0;
        $y = $this->GetY()+10;
        $this->SetXY($x,$y);
        $this->Write(6,$_SESSION['period']);
        $this->SetXY($x+5,$y);
        $this->Write(6,$_SESSION['period_unit']);
        //
        $y = $this->GetY()+10;
		$this->SetXY(10,$y);
		$file  ="temp/report.png";		
		$this->Image($file,10,$y);
		  $this->AddPage();
		$this->SetXY(10,$y);
		$file  ="temp/report2.png";		
		$this->Image($file,10,$y);

    }
    function Footer()
    {
        //Go to 1.5 cm from bottom
        $this->SetY(-15);
        //Select Arial italic 8
        $this->SetFont('Arial','I',8);
        //Print centered page number
        $this->Cell(0,10,'Copyright © . All Rights Reserved. Designed by ARMY ',0,0,'C');
    }

}		

    //view pdf file
	$pdf=new PDF('P','mm','A4');
	$header = array('Time','Speed','Start','Stop','Location');
	$pdf->SetFont('Times','',11);
	$pdf->AddPage();
	$pdf->BasicTable();
	$pdf->Output();
		
?>  
	