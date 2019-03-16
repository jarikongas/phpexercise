<?php
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
    });
	
	echo '<h2>Test student</h2>'
	$newstudent = new Student;
	$newstudent->setFname('Jari');


	echo 'Student is '.$newstudent->getFname();
?>