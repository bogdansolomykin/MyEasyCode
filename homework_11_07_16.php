﻿<?php

/*$randArray = array();
$i = 0;
while ($i < 40) {
    $randArray[] = rand(1, 40);
    $i++;
}

echo '<pre>';
print_r($randArray);
echo '</pre>';*/

// 2. Найти, есть ли в массиве число 37. Если есть - вывести его на экран и закончить обработку массива.

/*foreach ($randArray as $element) {
	if ($element == 37) {
		echo $element . '<br />';exit;
	}
}*/

// 6. Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
$matrix = array();
for ($i = 0; $i < 30; $i++) {
	if ($i % 2 !== 0) {
		$matrix[$i] = 0;
	} elseif ($i % 2 == 0) {
		$matrix[$i] = 1;
	}
}

echo '<pre>';
print_r($matrix);
echo '</pre>';

// 7. Используя функцию in_array() проверить, сколько в массиве повторяющихся значений.

// 8. Есть 2 массива заполненные случайными числами. Использую in_array() функцию, посчитать сколько чисел из массива A есть в массиве B