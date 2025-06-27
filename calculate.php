<?php 

	// Size , X , Y Calculate Total Sheet 

	function calculateTotalSheet($x,$y,$paperX,$paperY){
			$xr = $paperX / $x ;
			$yr = $paperY / $y ;
			if($xr > $yr){
			$xri = $paperX / $x ;
			$yri = $paperY / $y ;
			}else if($yr > $xr){
				$xri = $paperX / $y ;
				$yri = $paperY / $x ;
			}

			$total = $xri * $yri;
			echo $total;
	}
	calculateTotalSheet(8.25,10.5,22,28);

	//Price Calculate of board
	//Plate Number 
	// Printing Cost
	// Lamination Sheet 
	// Lamination Cost
	// Cutting Cost 
	//Binding Cost
