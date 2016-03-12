<?php
session_start();
require_once 'Document.class.php';
require_once ('../lib/autoload2.inc.php');

$doc = new Document("TEST","","","","");

$doc->begin();
$doc->userLevel = 3;
$doc->header("Hello");
$doc->Alert("success", "Bravo", "Tas tout bouziller");


$doc->end();