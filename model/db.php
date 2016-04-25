<?php
/*
*	Classe db qui permet de se connecter a la base de donnée
*/
try
{
	$db = new PDO('mysql:host=localhost;dbname=project', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
?>