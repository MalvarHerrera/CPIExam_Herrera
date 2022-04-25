<?php

$d = $_POST['name'];
$s = 0;
echo "Input Integer: ", $d;
	echo "<br>Factors ";
	for($i=1; $i<=$d; $i++){
		for($j=1; $j<=$d; $j++){
			$ans = $i*$j;
			if($ans==$d){
				echo $i ;
				echo " ";
				$s++;
			}

		}
		
	}

	echo "<br>The numbers of factors: ", $s;
?>