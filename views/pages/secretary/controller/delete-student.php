<?php
header('Location: /here/views/pages/secretary/student/list-student.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$id = $_GET['idStudent'];

$connection = Connection::connection();

try {
    $stmt = $connection->prepare("DELETE FROM student WHERE idStudent='$id'");
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}