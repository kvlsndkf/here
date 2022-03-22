<?php

require_once('/xampp/htdocs' . '/here/classes/users/Professor.class.php');
require_once('/xampp/htdocs' . '/here/classes/schools/Team.class.php');

try {
    $professor = new Professor();
    $team = new Team();
    $listProfessors = $professor->selectListProfessors();
    $listTeams = $team->selectListTeams();
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
    <title>Cadastro matéria | HERE!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- início do form -->
    <form action="../controller/subject-unit-registration.controller.php" method="POST">
        <label>Cadastro matéria</label>
        <br />
        <br />
        <label>Nome matéria</label>
        <input type="text" name="name" id="name">
        <br>
        <select name="idTeam" id="idTeam">
            <option selected>Selecione a turma</option>
            <?php foreach ($listTeams as $value) { ?>
                <option value="<?php echo ($value['idTeam']) ?>"> <?php echo ($value['nameTeam']) ?> </option>
            <?php } ?>
        </select>
        <br/>
        <label>Selecione os professores responsáveis pela matéria</label>
        <select name="idProfessors[]" id="idProfessors" class="form-select w-50 multiple-select" multiple>
            <?php foreach ($listProfessors as $value) { ?>
                <option value="<?php echo ($value['idProfessor']) ?>"> <?php echo ($value['nameProfessor']) ?> </option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Cadastrar matéria">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".multiple-select").select2({
            maximumSelectionLength: 2
        });
    </script>
</body>

</html>