<?php 
session_start(); 
error_reporting(0); 

require 'connection/database.php';
require 'Function/general.php';
require 'Function/user.php';

$errors = array();
?>