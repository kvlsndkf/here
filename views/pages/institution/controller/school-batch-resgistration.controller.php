<?php

header('Location:/here/views/pages/institution/school/list-school.page.php');
include_once '/xampp/htdocs' . '/here/database/connection.php';

$connection = Connection::connection();

if (!empty($_FILES['school-table-file']['tmp_name'])) {
    $file = new DOMDocument;
    $file->load($_FILES['school-table-file']['tmp_name']);

    $rows = $file->getElementsByTagName("Row");

    $firstRow = true;

    foreach ($rows as $row) {
        if (!$firstRow) {
            $nameSchool = $row->getElementsByTagName("Data")->item(0)->nodeValue;

            try {
                $stmt = $connection->prepare("INSERT INTO schools(nameSchool)
                                            VALUES (?)");
                $stmt->bindValue(1, $nameSchool);
                $stmt->execute();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        $firstRow = false;
    }
}
