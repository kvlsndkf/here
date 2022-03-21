<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/Subject.class.php');
include_once('/xampp/htdocs' . '/here/classes/schools/Course.class.php');
include_once('/xampp/htdocs' . '/here/classes/schools/Team.class.php');

$connection = Connection::connection();

try {
    $subject = new Subject();
    $countSubject = $subject->countSubject();
    $course = new Course();
    $countCourse = $course->countCourse();
    $team = new Team();
    $countTeam = $team->countTeam();
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
                    <a href="./course/list-course.page.php">
                        Cursos
                    </a>
                </th>

                <th>
                    <a href="./team/list-team.page.php">
                        Turmas
                    </a>
                </th>

                <th>
                    <a href="./subject/list-subject.page.php">
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
            <?php while ($row = $countCourse->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row['Quantidade']; ?></th>
                </tr>
            <?php } ?>
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
            <?php while ($row = $countTeam->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row['Quantidade']; ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- fim count turmas -->

    <!-- início count professores -->
    <table>
        <thead>
            <tr>
                <th>Total de matérias cadastradas</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $countSubject->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row['Quantidade']; ?></th>
                </tr>
            <?php } ?>
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