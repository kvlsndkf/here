<?php

require_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');

try {
    $school = new School();
    $list = $school->selectList();
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
    <title>Cadastro secretaria | HERE!</title>
</head>

<body>
    <form action="./controller/secretary-unit-registration.controller.php" method="POST">
        <label>Cadastro secretaria</label>
        <br />
        <br />
        <select name="idSchool" id="idSchool">
            <option selected>Selecione a Etec responsável pela secretaria</option>
            <?php foreach ($list as $value) { ?>
                <option value="<?php echo ($value['idSchool']) ?>"> <?php echo ($value['nameSchool']) ?> </option>
            <?php } ?>
        </select>
        <br />
        <label>Digite o nome do(a) secretário(a)</label>
        <input type="text" name="name" id="name">
        <br>
        <label>Defina um email para o(a) secretário(a)</label>
        <input type="text" name="email" id="email">
        <br>
        <label>Defina uma senha para o(a) secretário(a)</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Salvar">
    </form>
</body>

</html>