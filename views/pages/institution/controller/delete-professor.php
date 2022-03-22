<?php
header('Location: /here/views/pages/institution/professor/list-professor.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$id = $_GET['idProfessor'];

$connection = Connection::connection();

try {
    $stmt = $connection->prepare("DELETE FROM professors WHERE idProfessor='$id'
                                ");
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}