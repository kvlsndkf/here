<?php
header('Location: /here/views/pages/institution/secretary/list-secretary.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$id = $_GET['idSecreatry'];

$connection = Connection::connection();

try {
    $stmt = $connection->prepare("DELETE FROM secretary WHERE idSecretary='$id'");
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}