<?php

require_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');

try {
    $school = new School();
    $list = $school->selectListSchools();
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- início do form -->
    <form action="../controller/professor-unit-registration.controller.php" method="POST">
        <label>Cadastro professor</label>
        <br />
        <br />
        <br />
        <label>Digite o nome do(a) professor(a)</label>
        <input type="text" name="name" id="name">
        <br>
        <label>Defina um email para o(a) professor(a)</label>
        <input type="text" name="email" id="email">
        <br>
        <label>Defina uma senha para o(a) professor(a)</label>
        <input type="password" name="password" id="password">
        <br>
        <label>Selecione a(as) ETEC(s) que o professor atua</label>
        <select name="idSchools[]" id="idSchools" class="form-select w-50 multiple-select" multiple>
            <?php foreach ($list as $value) { ?>
                <option value="<?php echo ($value['idSchool']) ?>"> <?php echo ($value['nameSchool']) ?> </option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Salvar">
    </form>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(".multiple-select").select2({
            maximumSelectionLength: 3
        });
    </script>
</body>

</html>