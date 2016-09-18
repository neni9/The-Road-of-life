<?php
$pdo = new PDO('mysql:host=nenifrojnyneni.mysql.db;dbname=nenifrojnyneni', 'nenifrojnyneni', 'YoYott09',  array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
session_start();
define("RACINE_SITE", '/Roadoflife/');
require_once('fonction.inc.php');
$content = '';
