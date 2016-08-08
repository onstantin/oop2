<?php
error_reporting(E_ALL);
require_once "feedable.interface.php";
require_once "note.class.php";
require_once "news.class.php";
require_once "ImageJpeg.class.php";

$data = Note::loadDataFile();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Список новостей, публикаций и картинок</title>
	<meta charset="utf-8">
	<link type="text/css" href="style.css" rel="stylesheet" charset="utf-8"> 
</head>
<body>	

<?php

foreach($data as $feed_item_info)
{
    $class_name = $feed_item_info[0];
    $feed_object = new $class_name($feed_item_info[1]);
    /* @var $feed_object feedable */
    echo "<div>".$feed_object->feed_item()."</div>";
}
?>

</body>	
</html>