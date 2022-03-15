<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/secretary/Secretary.class.php');

$connection = Connection::connection();

try {
    $stmt = new Secretary();
    $listSecretary = $stmt->listSecretary();
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
                    <a href="../institution-index.page.php">
                        Home
                    </a>
                </th>
            </tr>
        </thead>
    </table>
    <!-- fim menu teste -->

    <!-- botão cadastro -->
    <h3>Cadastro Secretaria</h3>
    <a href="./register-secretary.page.php">
        <input type="button" value="Cadastrar secretaria">
    </a>

    <hr>
    <!-- fim -->

    <!-- início da tabela teste -->
    <h3>Lista de secretários(as)</h3>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Etec</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($row = $listSecretary->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row[0]; ?></th>
                    <th><?php echo $row[1]; ?></th>
                    <th><?php echo $row[2]; ?></th>
                    <th><?php echo $row[3]; ?></th>
                    <th><a href="../controller/delete-secretary.php?idSecretary=<?php echo $row[0]; ?>">Excluir</a></th>
                    <th><a href="#">Editar</a></th>
                </tr>
            <?php } ?>

        </tbody>
    </table>
    <!-- fim da tabela teste -->
</body>

</html>