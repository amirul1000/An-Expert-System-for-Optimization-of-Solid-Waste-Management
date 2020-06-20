<?php
function fvalue($waste, $pre, $period)
	{ 
				
		$total = (100 + $pre)/100;
		$total1 = pow($total, 5);
		$total2 = $waste * $total1;
		return $total2;
				
	} 
function userval($item, $userval) 
	{
		$total = $item * $userval;
		return $total;
	}

?>
 