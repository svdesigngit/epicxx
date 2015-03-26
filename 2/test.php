<?php

echo "Второе занятие<br /><br /><br />";

$input = 'Vetal';
if (isset($_GET['name'])) {
	$input = $_GET['name'];
}
echo "hello ".htmlspecialchars($input);

echo "<br /><a href='http://localhost/epicphp/2/test.php?title=Телефон&description=Моноблок&category=Смартфон&price=20000'>Задание 1 - выполнить</a> - <a href='http://localhost/epicphp/2/test.php'>Сбросить</a><br /><br />";
if (isset($_GET['title'])) {
	echo "Название - ".htmlspecialchars($_GET['title'])."<br />";
}
if (isset($_GET['description'])) {
	echo "Описание - ".htmlspecialchars($_GET['description'])."<br />";
}
if (isset($_GET['category'])) {
	echo "Категория - ".htmlspecialchars($_GET['category'])."<br />";
}
if (isset($_GET['price'])) {
	echo "Цена - ".htmlspecialchars($_GET['price'])."<br />";
}
?>