<?php
	$is_rain = rand(0, 1);
	$temp = rand(-10, 30);

	if ($is_rain) {
		echo "Take umrella, it's raining!";
	}else {
		echo "The sky is clear";
	};

	echo "<br>";
	echo "The temperature is: " . $temp . "C";
	echo "<br>";

	if ($temp <= 0) {
		echo "It's freezing!";
	} elseif (0 < $temp && $temp <= 10) {
		echo "It's cold.";
	} elseif (10 < $temp && $temp <= 25) {
		echo "The weather is fine.";
	} else {
		echo "It's hot!";
	}
		
?>
