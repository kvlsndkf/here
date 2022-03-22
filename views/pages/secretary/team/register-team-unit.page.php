<?php

require_once('/xampp/htdocs' . '/here/classes/schools/Course.class.php');

try {
    $course = new Course();
    $listCourses = $course->selectList();
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
    <title>Cadastro turma | HERE!</title>
</head>

<body>
    <!-- início do form -->
    <form action="../controller/team-unit-registration.controller.php" method="POST">
        <label>Cadastro turma</label>
        <br />
        <br />
        <label>Nome turma</label>
        <input type="text" name="name" id="name">
        <br>
        <label>Data de ingresso</label>
        <input type="date" name="dateStart" id="dateStart">
        <br>
        <label>Módulo</label>
        <input type="text" name="module" id="module">
        <br>
        <select name="idCourse" id="idCourse">
            <option selected>Selecione o curso</option>
            <?php foreach ($listCourses as $value) { ?>
                <option value="<?php echo ($value['idCourse']) ?>"> <?php echo ($value['nameCourse']) ?> </option>
            <?php } ?>
        </select>
        <br/>
        <input type="submit" value="Cadastrar turma">
    </form>
</body>

</html>