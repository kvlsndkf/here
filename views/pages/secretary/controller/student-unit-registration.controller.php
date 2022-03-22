<?php
header('Location: /here/views/pages/secretary/student/list-student.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/Group.class.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/Team.class.php');
require_once ('/xampp/htdocs' . '/here/classes/users/Student.class.php');

$group = new Group();
$group->setIdGroup($_POST['idGroup']);

$team = new Team();
$team->setIdTeam($_POST['idTeam']);

$student = new Student();
$student->setNameStudent($_POST['name']);
$student->setEmailStudent($_POST['email']);
$student->setPasswordStudent($_POST['password']);

$student->setGroup($group);
$student->setTeam($team);
$student->register($student);