<?php
mb_internal_encoding('UTF-8');
$mycontakt = [
	' Мой email ',
	'email' => 'VETAL1000@mail.ru',
	'      ЗВОНИТЕ',
	'ПИШИТЕ   ',
];
//var_dump($mycontakt);
foreach($mycontakt as $key=>$value){
	if ($key == 'email') {
		$value = explode('@',$value);
		$value = implode(' собака ',$value);
	}
	$mycontakt[$key] = strtolower(trim($value));
}

echo implode(" ", $mycontakt)."<br /><br /><br /><br />";

// ЗАДАНИЕ 2

$row = "Строка которую нужно разбить на массив перемешать символы кроме первого и последнего в словах затем вернуть строку";
echo "Сначало было так - ".$row."<br /><br />";

$row = explode(' ',$row);
foreach($row as $key => $value){
	if (mb_strlen($value) > 4) {
		$word_array['inner'] = preg_split('//u', $value, -1, PREG_SPLIT_NO_EMPTY);
		$word_array['first_letter'] = $word_array['inner'][0];
		$word_array['last_letter'] = $word_array['inner'][count($word_array['inner'])-1];
		$word_array['inner'] = array_slice($word_array['inner'], 2, -1);
		
		shuffle($word_array['inner']);
		$row_result[] = $word_array['first_letter'].implode('',$word_array['inner']).$word_array['last_letter'];
		//var_dump($word_array);
	}
	else {
		$row_result[] = $value;
	}
}

echo "Стало так - ".implode(" ", $row_result);

?>