<?php
//header('Location: /here/views/pages/institution/institution-index.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/School.class.php');

$school = new School();
$school->setNameSchool($_POST['name']);

$school->register($school);
$school->list($school);