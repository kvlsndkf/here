<?php
//header('Location: /here/views/pages/institution/school/list-school.page.php');
include_once ('/xampp/htdocs' . '/here/database/connection.php');


$name = $_POST['name'];
$id = $_GET['id'];


$connection = Connection::connection();

try {
    $stmt = $connection->prepare("UPDATE schools SET nameSchool='$name' WHERE idSchool='$id' ");

    $stmt->bindValue(1, $name);
    $stmt->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
