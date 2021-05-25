<?php
function student_exists($admin) {
	$admin = sanitize($admin);
	
	return (mysql_result(mysql_query("SELECT COUNT(`count`) FROM `student` WHERE `admission` = '$admin'"), 0) == 1) ? true : false;
}
function school_exists($school) {
	$school = sanitize($school);
	
	return (mysql_result(mysql_query("SELECT COUNT(`count`) FROM `student` WHERE `school` = '$school'")) == 1) ? true : false;
}
?>