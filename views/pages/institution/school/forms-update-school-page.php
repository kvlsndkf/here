<?php
include_once('/xampp/htdocs' . '/here/database/connection.php');

$connection = Connection::connection();
// Se EXISTIR a ID vinda pelo método GET, ele fará o bloco de comando proposto.
if (isset($_GET['updateSchool'])) {

    $id = $_GET['updateSchool'];

    $stmt = $connection->prepare("SELECT * FROM schools
                                    WHERE idSchool = $id
                                ");
    $stmt->execute();
    $rowCat = $stmt->fetch(PDO::FETCH_BOTH);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro ETEC | HERE!</title>
</head>

<body>
    <form action="../controller/update-school-controller.php?updateIdSchool=<?php echo $rowCat[0]?>" name="forms-update-school-page" method="post">
        <label>Editar nome da ETEC</label>
        <br />
        <br />
        <label>Nome ETEC</label>
        <br />
        <input type="text" name="updateNameSchool" value="<?php echo $rowCat[1] ?>" />
        <br />

        <br />
        <input type="submit" value="Atualizar" name="update">
    </form>
</body>

</html>