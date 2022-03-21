<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/users/Student.class.php');

$connection = Connection::connection();

try {
    $student = new Student();
    $listStudents = $student->list();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretarias | HERE!</title>

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
                    <a href="../secretary-index.page.php">
                        Home
                    </a>
                </th>
            </tr>
        </thead>
    </table>
    <!-- fim menu teste -->

    <!-- botão cadastro -->
    <h3>Cadastro estudante</h3>
    <a href="./register-student-unit.page.php">
        <input type="button" value="Cadastrar estudante">
    </a>

    <hr>
    <!-- fim -->

    <!-- início da tabela teste -->
    <h3>Lista de estudantes</h3>
    <?php while ($row = $listStudents->fetch(PDO::FETCH_BOTH)) { ?>
        <?php echo 'Nome aluno ' . $row[1] . '<br>' ?>
        <?php echo 'Email ' . $row[2] . '<br>' ?>
        <?php echo 'Grupo ' . $row[3] . '<br>' ?>
        <?php echo 'Turma ' . $row[4] . '<br>' ?>
        <a href="../controller/delete-student.php?idStudent=<?php echo $row[0]; ?>">Excluir</a>
        <a href="#">Editar</a>
        <?php echo '<hr>' ?>
    <?php } ?>
    <!-- fim da tabela teste -->
</body>

</html>