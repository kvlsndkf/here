<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');
include_once('/xampp/htdocs' . '/here/classes/secretary/Secretary.class.php');

$connection = Connection::connection();

try {
    //$stmt = $connection->prepare("SELECT * FROM schools ORDER BY nameSchool");
    //$stmt->execute();
    $stmt = new Secretary();
    $listSchools = $stmt->list();
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
</head>

<body>
    <h3>Cadastro em lote ETEC</h3>
    <a href="./register-school.page.php">
        <input type="button" value="Cadastrar ETEC">
    </a>

    <hr>
    
    <h3>Cadastro Secretaria</h3>
    <a href="./register-secretary.page.php">
        <input type="button" value="Cadastrar secretaria">
    </a>

    <hr>
    <h3>Lista de ETEC's</h3>
    
    <?php
    $indice = 1;
    
    while ($row = $listSchools->fetch(PDO::FETCH_BOTH)) {
        echo $indice . ' - ' . $row[2]. '<br>';
        echo $row[1] . '<br>';
        $indice ++;
    }
    ?>
</body>

</html>