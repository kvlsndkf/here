<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');

$connection = Connection::connection();

try {
    $stmt = new School();
    $listSchools = $stmt->listSchools();
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
    <title>ETEC's | HERE!</title>

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
                    <a href="../institution-index.page.php">
                        Home
                    </a>
                </th>
            </tr>
        </thead>
    </table>
    <!-- fim menu teste -->

    <!-- início cadastro em lote -->
    <h3>Cadastro em lote ETEC</h3>
    <a href="./register-school-batch.page.php">
        <input type="button" value="Cadastrar ETEC">
    </a>

    <hr>
    <!-- fim cadastro em lote -->

    <!-- início cadastro unitário -->
    <h3>Cadastro unitário ETEC</h3>
    <a href="./register-school-unit.page.php">
        <input type="button" value="Cadastrar ETEC">
    </a>

    <hr>
    <!-- fim cadastro unitário -->

    <!-- inicio da tabela teste -->
    <table>
        <thead>
            <tr>
                <th>Nome ETEC</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = $listSchools->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row[1]; ?></th>
                    <th><a href="./forms-update-school-page.php?nameSchool=<?php echo $row[1]; ?>">Editar</a></th>
                    <th><a href="../controller/delete-school.php?idSchool=<?php echo $row[0]; ?>">Excluir</a></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <!-- fim da tabela teste -->
</body>

</html>