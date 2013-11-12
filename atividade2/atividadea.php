<?php

$countriesA = array('US', 'EN', 'BR', 'PT');
$countriesB = array('GB', 'PT', 'BR');

for ($i=0; $i < sizeof($countriesA); $i++) { 
	for ($j=0; $j < sizeof($countriesB); $j++) { 
		if ($countriesA[$i] == $countriesB[$j] ) {
			$print = false;
			break 2;
		}
	}
	echo $countriesA[$i] . "<br />";
}


for ($i=0; $i < sizeof($countriesB); $i++) { 
	for ($j=0; $j < sizeof($countriesA); $j++) { 
		if ($countriesB[$i] == $countriesA[$j] ) {
			break 2;
		}
	}
	$countriesA[] = $countriesB[$i];
}

echo "<pre>";
print_r($countriesA);

///////////////////
// COM AJUDA DO PHP
///////////////////
//Tarefa 1
$countriesA = array('US', 'EN', 'BR', 'PT');
$countriesB = array('GB', 'PT', 'BR');
echo '<br />Parte A com ajuda do php<br />';
for ($i=0; $i < sizeof($countriesA); $i++)	
	if (!in_array($countriesA[$i], $countriesB))
		echo $countriesA[$i] . '<br />';

//forma 2 da tarefa 1
echo "<br />Outra forma<br />";
print_r(array_diff($countriesA, $countriesB));

//TAREFA 2
echo '<br />Parte B com ajuda do php<br />';
foreach ($countriesA as $key => $value) {
	if (in_array($value, $countriesB))
		unset($countriesA[$key]);
}
print_r(array_merge($countriesA, $countriesB));