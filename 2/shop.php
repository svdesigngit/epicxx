<h1>Магазин</h1>
<?php

require_once('array.php');
$page_count = count($products)/2;

$products = array_slice($products,0,2);


for($i=1; $i<=$page_count;$i++) {
	$page_nav = "<a href='shop.php?page=".$i."'>".$i."</a> | ";
}

if(isset($_GET['page']) && $_GET['page'] != 1) {
	
}

var_dump($products_p);