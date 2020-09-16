<?php
	$array = [1, 3, 5, 6, 23, 7, 9];
	$target = 11;

	function find_indices($array, $target){
		$length = count($array);

		for ($i = 0; $i < ($length - 1); $i++){
			for ($j = $i+1; $j < $length; $j++){
				if ($array[$i] + $array[$j] == $target) {
					
					return [$i, $j];
				}
		}
	}
	}
	$positions = find_indices($array, $target);
	echo "The positions are: ${positions[0]}, ${positions[1]}!";
?>