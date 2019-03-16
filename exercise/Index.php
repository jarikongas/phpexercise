<?php
	spl_autoload_register(function ($class_name) {
	    include $class_name . '.php';
    });

	$toby = new Student("Hung", "Fam", 1997);
	$toby->setCourses('Finnish');
	$toby->setCourses('PHP');
	$toby->setCreditpoints('30');
	$olli = new Teacher("Olli", "Opettaja", 1975);
	$olli->setSubjects('Software Engineering');
	$olli->setSubjects('Server operating systems');
	$olli->setDepartment('Technical Department');
	$tampio = new Staff('Tauno', 'Talonmies', 1970);
	$tampio->setVacancy('Caretaker');
	$sini = new Staff("Sini", "Siivooja", 1990);
	$sini->setVacancy("Cleaner");
	echo '<br> ';
	$toby->printData();
	echo '<br> <br>';
	$olli->printData();
	echo '<br> <br>';
	$tampio->printData();
	echo '<br> <br>';
	$sini->printData();
?>