<?php

header('Location:/here/views/pages/secretary/course/list-course.page.php');
include_once '/xampp/htdocs' . '/here/database/connection.php';

$connection = Connection::connection();

if (!empty($_FILES['course-table-file']['tmp_name'])) {
    $file = new DOMDocument;
    $file->load($_FILES['course-table-file']['tmp_name']);

    $rows = $file->getElementsByTagName("Row");

    $firstRow = true;

    foreach ($rows as $row) {
        if (!$firstRow) {
            $nameCourse = $row->getElementsByTagName("Data")->item(0)->nodeValue;
            $courseAnnual = $row->getElementsByTagName("Data")->item(1)->nodeValue;

            try {
                $stmt = $connection->prepare("INSERT INTO courses(nameCourse, isAnnualDurationDate)
                                                VALUES (?, ?)");
                $stmt->bindValue(1, $nameCourse);
                $stmt->bindValue(2, $courseAnnual);
                $stmt->execute();
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        $firstRow = false;
    }
}
