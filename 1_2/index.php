<?php
	$array = [[1, 2, [3]], 4, [5, [6, 7]]];
	$output_array = [];

	function flatten($array, &$output_array){

		foreach ($array as $value) {
			if (is_array($value)){
				echo "Step<br>";
				flatten($value, $output_array);
			}
			else {
				$output_array[] = $value;
			}
		}
	}

	flatten($array, $output_array);
	var_dump($output_array);
?>