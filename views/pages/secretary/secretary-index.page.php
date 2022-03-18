<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');
include_once('/xampp/htdocs' . '/here/classes/secretary/Secretary.class.php');

$connection = Connection::connection();

try {
    $stmt = new Secretary();
    $stmtt = new School();
    $listSchools = $stmt->list();
    $countSecretary = $stmt->countSecretary();
    $countSchool = $stmtt->countSchool();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituição | HERE!</title>

    <style>
        table,
        tr,
        th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <!-- menu teste -->
    <table>
        <thead>
            <tr>
                <th>
                    <a href="./course/list-couse.page.php">
                        Cursos
                    </a>
                </th>

                <th>
                    <a href="#">
                        Turmas
                    </a>
                </th>

                <th>
                    <a href="#">
                        Matérias
                    </a>
                </th>

                <th>
                    <a href="#">
                        Estudantes
                    </a>
                </th>
            </tr>
        </thead>
    </table>
    <!-- fim menu teste -->

    <!-- início count cursos-->
    <br />
    <br />
    <br />
    <br />

    <table>
        <thead>
            <tr>
                <th>Total de cursos cadastrados</th>
            </tr>
        </thead>
        <tbody>
            <th>nada</th>
        </tbody>
    </table>
    <!-- fim count cursos -->

    <!-- início count turmas -->
    <table>
        <thead>
            <tr>
                <th>Total de turmas cadastradss</th>
            </tr>
        </thead>
        <tbody>
            <th>nada</th>
        </tbody>
    </table>
    <!-- fim count turmas -->

    <!-- início count professores -->
    <table>
        <thead>
            <tr>
                <th>Total de professores(as) cadastrados</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>nada</th>
            </tr>
        </tbody>
    </table>
    <!-- fim count professores -->

    <!-- início count alunos -->
    <table>
        <thead>
            <tr>
                <th>Total de alunos cadastrados</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>nada</th>
            </tr>
        </tbody>
    </table>
    <!-- fim count alunos -->

</body>

</html>