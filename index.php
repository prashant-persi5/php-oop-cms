<?php 

$section = $_GET['section'] ?? 'home';

if ($section == 'about') {
  include 'controller/About.php';
} elseif ($section == 'contact') {
  include 'controller/Contact.php';
} else {
  include 'controller/Home.php';
}

?>