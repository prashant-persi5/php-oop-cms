<?php
session_start();
require_once 'src/Controller.php'; 
include 'controller/HomeController.php';
include 'controller/AboutController.php';
include 'controller/ContactController.php';

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

if ($section == 'about') {
	$about = new AboutController();
	$about->runAction($action);
} elseif ($section == 'contact') {		
	$contact = new ContactController();
	$contact->runAction($action);
} else {
	$home = new HomeController();
	$home->runAction($action);
}