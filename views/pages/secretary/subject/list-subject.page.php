<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/Subject.class.php');

$connection = Connection::connection();

try {
    $subject = new Subject();
    $listSubjects = $subject->list();
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
                    <a href="../secretary-index.page.php">
                        Home
                    </a>
                </th>
            </tr>
        </thead>
    </table>
    <!-- fim menu teste -->

    <!-- botão cadastro -->
    <h3>Cadastro matéria</h3>
    <a href="./register-subject-unit.page.php">
        <input type="button" value="Cadastrar matéria">
    </a>

    <hr>
    <!-- fim -->

    <!-- início da tabela teste -->
    <h3>Lista de matérias</h3>

    <?php for ($i = 0; $i < count($listSubjects); $i++) {
        $row = $listSubjects[$i];
    ?>
        <?php echo 'Nome matéria ' . $row->nameSubject . '<br>'; ?>
        <?php echo 'Nome da turma ' . $row->team . '<br>'; ?>

        <?php for ($j = 0; $j < count($row->professor); $j++) {
            $professor = $row->professor[$j];
        ?>
            <?php echo 'Nome professor ' . $professor['nameProfessor'] . '<br>'; ?>
        <?php } ?>
        <a href="#">Excluir</a>
        <a href="#">Editar</a>
        <?php echo '<hr>'; ?>
    <?php } ?>


    <!-- fim da tabela teste -->
</body>

</html>