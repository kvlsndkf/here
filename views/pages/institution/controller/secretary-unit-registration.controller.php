<?php
header('Location: /here/views/pages/institution/secretary/list-secretary.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/School.class.php');
require_once ('/xampp/htdocs' . '/here/classes/secretary/Secretary.class.php');

$school = new School();
$school->setIdSchool($_POST['idSchool']);

$secretary = new Secretary();
$secretary->setNameSecretary($_POST['name']);
$secretary->setEmailSecretary($_POST['email']);
$secretary->setPasswordSecretary($_POST['password']);

$secretary->setSchool($school);
$secretary->register($secretary);