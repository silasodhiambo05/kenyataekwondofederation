<?php 
function sanitize($data) {
	return mysql_real_escape_string($data);
}

function output_errors($errors) {
	$output = array();
	foreach($errors as $error) {
		echo $error, ', ';
	}
	   
}
?>