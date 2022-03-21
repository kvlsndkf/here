<?php
header('Location: /here/views/pages/secretary/subject/list-subject.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$id = $_GET['idSubject'];

$connection = Connection::connection();

try {
    $stmt = $connection->prepare("DELETE FROM subjects WHERE idSubject='$id'
                                ");
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}