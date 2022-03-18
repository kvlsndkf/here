<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/users/Professor.class.php');

$connection = Connection::connection();

try {
    $stmt = new Professor();
    $stmtt = new Professor();
    $listProfessor = $stmt->listProfessors();
    $listSchoolsProfessor = $stmtt->listSchoolsProfessors();
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
    <title>Professores | HERE!</title>

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
    <h3>Cadastro em lote professores</h3>
    <a href="#">
        <input type="button" value="Cadastrar professores">
    </a>

    <hr>
    <!-- fim cadastro em lote -->

    <!-- início cadastro unitário -->
    <h3>Cadastro unitário professores</h3>
    <a href="./register-professor-unit.page.php">
        <input type="button" value="Cadastrar professor">
    </a>

    <hr>
    <!-- fim cadastro unitário -->

    <!-- inicio da tabela teste -->
    <h3>Lista de professores</h3>
    <hr>
    
    <?php while ($row = $listProfessor->fetch(PDO::FETCH_BOTH)) { ?>
        <?php echo 'Nome ' . $row[0] . '<br>' ?>
        <?php echo 'Email ' . $row[1] . '<br>' ?>
        <?php echo '-------------------------- <br>' ?>
        
            <br>
        <a href="../controller/delete-secretary.php?idSecretary=<?php echo $row[0]; ?>">Excluir</a>
        <a href="#">Editar</a>
        <hr>
    <?php } ?>
    <!-- fim da tabela teste -->
</body>

</html>