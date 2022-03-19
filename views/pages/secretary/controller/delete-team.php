<?php
header('Location: /here/views/pages/secretary/team/list-team.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$id = $_GET['idTeam'];

$connection = Connection::connection();

try {
    $stmt = $connection->prepare("DELETE FROM team WHERE idTeam='$id'");
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}