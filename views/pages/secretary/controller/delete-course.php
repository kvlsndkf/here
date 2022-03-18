<?php
header('Location: /here/views/pages/secretary/course/list-course.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$id = $_GET['idCourse'];

$connection = Connection::connection();

try {
    $stmt = $connection->prepare("DELETE FROM courses WHERE idCourse='$id'");
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}