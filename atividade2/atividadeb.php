<?php

for ($i=1; $i <= 10; $i++) { 
	if ($i != 1) {
		if($i % 2) {
			echo $i . " elefantes incomodam muita gente! <br />";
		} else {
			echo $i . " elefantes";
				for ($j=0; $j < $i; $j++) { 
					echo " incomodam";
				}
			echo " muito mais! <br />";
		}
	} else {
		echo $i . " elefante incomoda muita gente! <br />";
	}
}