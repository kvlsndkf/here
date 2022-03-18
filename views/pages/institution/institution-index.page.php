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
                    <a href="./school/list-school.page.php">
                        ETEC's
                    </a>
                </th>

                <th>
                    <a href="./secretary/list-secretary.page.php">
                        Secretaria
                    </a>
                </th>

                <th>
                    <a href="./professor/list-professor.page.php">
                        Professor
                    </a>
                </th>
            </tr>
        </thead>
    </table>
    <!-- fim menu teste -->

    <!-- início count etec-->
    <br />
    <br />
    <br />
    <br />

    <table>
        <thead>
            <tr>
                <th>Total de ETEC's cadastradas</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $countSchool->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row['Quantidade']; ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- fim count etec -->

    <!-- início count secretarias -->
    <table>
        <thead>
            <tr>
                <th>Total de secretários(as) cadastrados</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $countSecretary->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row['Quantidade']; ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- fim count secretarias -->

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


    <br />
    <br />
    <br />
    <br />

    <!-- início da tabela teste -->
    <h3>Lista de ETEC's e secretarias</h3>
    <table>
        <thead>
            <tr>
                <th>Nome ETEC</th>
                <th>Secretário responsável</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = $listSchools->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row[2]; ?></th>
                    <th><?php echo $row[1]; ?></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <!-- fim da tabela teste -->
</body>

</html>