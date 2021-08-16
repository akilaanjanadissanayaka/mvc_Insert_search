<?php
require "../model/model.php";
$DB = new DB();
$DB->insert(
   "INSERT INTO `users` (`id`, `name`) VALUES ('".$_POST['id']."','".$_POST['name']."')"); 
?>