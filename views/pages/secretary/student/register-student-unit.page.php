<?php

require_once('/xampp/htdocs' . '/here/classes/schools/Group.class.php');
require_once('/xampp/htdocs' . '/here/classes/schools/Team.class.php');

try {
    $group = new Group();
    $listGroups = $group->selectList();
    $team = new Team();
    $listTeams = $team->selectList();
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
    <title>Cadastro aluno | HERE!</title>
</head>

<body>
    <!-- início do form -->
    <form action="../controller/student-unit-registration.controller.php" method="POST">
        <label>Cadastro aluno</label>
        <br />
        <br />
        <label>Digite o nome do(a) aluno</label>
        <input type="text" name="name" id="name">
        <br>
        <label>Defina um email para o(a) aluno</label>
        <input type="text" name="email" id="email">
        <br>
        <label>Defina uma senha para o(a) aluno</label>
        <input type="password" name="password" id="password">
        <br>
        <br />
        <select name="idGroup" id="idGroup">
            <option selected>Selecione o grupo</option>
            <?php foreach ($listGroups as $value) { ?>
                <option value="<?php echo ($value['idGroup']) ?>"> <?php echo ($value['nameGroup']) ?> </option>
            <?php } ?>
        </select>
        <br />
        <br>
        <select name="idTeam" id="idTeam">
            <option selected>Selecione a turma</option>
            <?php foreach ($listTeams as $value) { ?>
                <option value="<?php echo ($value['idTeam']) ?>"> <?php echo ($value['nameTeam']) ?> </option>
            <?php } ?>
        </select>
        <br />
        <br />
        <input type="submit" value="Cadastrar estudante">
    </form>
</body>

</html>