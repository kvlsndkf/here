<?php
header('Location: /here/views/pages/institution/school/list-school.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$id = $_GET['idSchool'];

$connection = Connection::connection();

try {
    $stmt = $connection->prepare("DELETE FROM schools WHERE idSchool='$id'");
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}