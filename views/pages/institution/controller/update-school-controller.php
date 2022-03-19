<?php
header('Location: /here/views/pages/institution/school/list-school.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');

$connection = Connection::connection();


if (isset($_POST['update'])) {

    $id = $_GET['updateIdSchool'];
    $name = $_POST['updateNameSchool'];

    $stmt = $connection->prepare("UPDATE schools
                                SET nameSchool = ?
                                    WHERE idSchool = $id");
    $stmt->bindValue(1, $name);
    $stmt->execute();
}