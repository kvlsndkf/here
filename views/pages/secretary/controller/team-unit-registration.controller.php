<?php
header('Location: /here/views/pages/secretary/team/list-team.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/Course.class.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/Team.class.php');

$course = new Course();
$course->setIdCourse($_POST['idCourse']);

$team = new Team();
$team->setNameTeam($_POST['name']);
$team->setStartDateTeam($_POST['dateStart']);
$team->setModuleTeam($_POST['module']);

$team->setCourse($course);
$team->register($team);