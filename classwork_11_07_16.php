﻿<?php
/*$numbers = array();
for ($i = 1; $i <= 100; $i++) {
	$numbers[] = $i;
}*/
// print_r($numbers);
/*for ($n = 4; $n < 100; $n++) {
	echo $numbers[$n] . '<br />';
	$n += 4;
}*/
/*foreach ($numbers as $number) {
	if ($number == 10 || $number == 25) {
		continue;
	}
	elseif ($number == 77) {
		break;
	}
	else {
		echo $number . '<br />';
	}
}*/

$randArr = array();
$i = 1;
while ($i <= 100) {
    $randArr[] = rand(1, 100);
    $i++;
}
/*
$randArr2 = array();
$i = 1;
while ($i <= 100) {
    $randArr2[] = rand(1, 100);
    $i++;
}
*/
// echo '<pre>';
// print_r($randArr);
// echo '</pre>';

// echo '<pre>';
// print_r($randArr2);
// echo '</pre>';

/*$a = 35;
if (in_array($a, $randArr)) {
	if (!in_array($a, $randArr2))
		echo 'Всё ОК!';
}*/
/*
$countRandArr = count($randArr);
foreach ($randArr as $element) {
	if (in_array($element, $randArr2)) {
		echo $element . '<br />';
	}
}
*/

$randArr = array();
$i = 1;
while ($i <= 100) {
    $randArr[] = rand(1, 100);
    $i++;
}

$randArr2 = array();
foreach ($randArr as $element) {
	if (in_array($element, $randArr2)) {
		$randArr2[] = $element;
	}
}

echo '<pre>';
print_r($randArr);
echo '</pre>';

echo '<pre>';
print_r($randArr2);
echo '</pre>';
