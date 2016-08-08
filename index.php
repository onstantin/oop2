<?php
error_reporting(E_ALL);
require_once "feedable.interface.php";
require_once "note.class.php";
require_once "news.class.php";
require_once "ImageJpeg.class.php";

$news = new News();
$news->title = "Заголовок";
$news->content = "Текст новости News";
$news->save();

$note = new Note();
$note->content = "Запись Note";
$note->save();

$img = new ImageJpeg();
$img->url = "https://i.ytimg.com/vi/kvJIU2l-Etk/hqdefault.jpg";
$img->save();



?>