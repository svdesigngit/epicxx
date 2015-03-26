<?php
	$test = "hellow world!<br /><br /><br /><br />";
	echo $test;
	var_dump($test);

	$age = 29;
	if ($age < 20) {
		echo "Все в переди Jack";
	}
	if ($age >= 20 && $age <=30) {
		echo "Самое время взяться за ум Jack";
	}
	else {
		echo "У вас есть чему поучиться Jack";
	}
	
echo "<br /><br /><br />";

//таблица умножения
$table_col = 15;
$table_row = 25;
$first_row = "<tr><td></td>";
$row_result = "";

for ($r=1; $r<=$table_row; $r++) {
		$row_result .= "<tr><th>".$r."</th>";
	for($c=1; $c<=$table_col; $c++){
		if ($r==1) {
			$first_row .= "<th>".$c."</th>";
		}
		$row_result .= "<td>".$r*$c."</td>";
	}
		$row_result .= "</tr>";
}
$first_row .= "</tr>";
echo "<table>" . $first_row . $row_result . "</table><br/><br/>";

//FizzBuzz
for($i=1; $i<=100; $i++) {
	
	if (is_int($i/3) && is_int($i/5)) {
		echo $i." - FizzBuzz<br />";
	}
	else if (is_int($i/3)) {
		echo $i." - Fizz<br />"; 
	}
	else if (is_int($i/5)) {
			echo $i." - Buzz<br />";
	}
	else {
			echo $i."<br />";
	}
}
