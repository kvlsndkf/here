<?php
header('Location: /here/views/pages/secretary/subject/list-subject.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');
require_once ('/xampp/htdocs' . '/here/classes/users/Professor.class.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/Subject.class.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/Team.class.php');

$professor = new Professor();
$professor = ($_POST['idProfessors']);

$team = new Team();
$team->setIdTeam($_POST['idTeam']);

$subject = new Subject();
$subject->setNameSubject($_POST['name']);

$subject->setProfessor($professor);
$subject->setTeam($team);
$subject->register($subject);