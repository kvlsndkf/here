<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/Course.class.php');

$connection = Connection::connection();

try {
    $stmt = new Course();
    $listCourse = $stmt->list();
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

    
    <!-- início cadastro em lote -->
    <h3>Cadastro em lote cursos</h3>
    <a href="./register-course-batch.page.php">
        <input type="button" value="Cadastrar cursos">
    </a>

    <hr>
    <!-- fim cadastro em lote -->

    <!-- botão cadastro -->
    <h3>Cadastro curso</h3>
    <a href="./register-course-unit.page.php">
        <input type="button" value="Cadastrar curso">
    </a>

    <hr>
    <!-- fim -->

    <!-- início da tabela teste -->
    <h3>Lista de cursos</h3>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Anual</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = $listCourse->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row[1]; ?></th>
                    <th><?php echo $row[2]; ?></th>
                    <th><a href="../controller/delete-course.php?idCourse=<?php echo $row[0]; ?>">Excluir</a></th>
                    <th><a href="#">Editar</a></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <!-- fim da tabela teste -->
</body>

</html>