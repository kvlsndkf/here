<?php
header('Location: /here/views/pages/institution/professor/list-professor.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');
require_once ('/xampp/htdocs' . '/here/classes/users/Professor.class.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/School.class.php');

$school = new School();
$school = ($_POST['idSchools']);

$professor = new Professor();
$professor->setNameProfessor($_POST['name']);
$professor->setEmailProfessor($_POST['email']);
$professor->setPasswordProfessor($_POST['password']);

$professor->setSchool($school);
$professor->register($professor);
