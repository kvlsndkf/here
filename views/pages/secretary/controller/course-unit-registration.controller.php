<?php
header('Location: /here/views/pages/secretary/course/list-course.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');
require_once ('/xampp/htdocs' . '/here/classes/schools/Course.class.php');

$course = new Course();
$course->setNameCourse($_POST['name']);
$course->setIsAnnualDurationDate(isset($_POST['course-annual']));

$course->register($course);