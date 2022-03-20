<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');
include_once('/xampp/htdocs' . '/here/classes/secretary/Secretary.class.php');

$connection = Connection::connection();
$conn = Connection::connectionli();

try {
    $stmt = new Secretary();
    $stmtt = new School();
    $listSchools = $stmt->list();
    $countSecretary = $stmt->countSecretary();
    $countSchool = $stmtt->countSchool();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Instituição | HERE!</title>

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
                    <a href="./school/list-school.page.php">
                        ETEC's
                    </a>
                </th>

                <th>
                    <a href="./secretary/list-secretary.page.php">
                        Secretaria
                    </a>
                </th>
            </tr>
        </thead>
    </table>
    <!-- fim menu teste -->

    <!-- início count etec-->
    <br />
    <br />
    <br />
    <br />

    <table>
        <thead>
            <tr>
                <th>Total de ETEC's cadastradas</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $countSchool->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row['Quantidade']; ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <!-- fim count etec -->

    <!-- início count secretarias -->
    <table>
        <thead>
            <tr>
                <th>Total de secretários(as) cadastrados</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $countSecretary->fetch(PDO::FETCH_BOTH)) { ?>
                <tr>
                    <th><?php echo $row['Quantidade']; ?></th>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <br />
    <br />
    <br />
    <br />

    <!-- fim count secretarias -->

    <!-- início da tabela teste -->
    <h3>Lista de ETEC's e secretarias</h3>
    <table>
        <thead>
            <tr>
                <th>Nome ETEC</th>
                <th>Secretário responsável</th>
            </tr>
        </thead>
        <tbody>

            <?php
            //*Receber o número da pagina
            //*Pagina atual
            $current_page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
            $page = (!empty($current_page)) ? $current_page : 1;

            //* Setar a quantidade de registros por pagina
            $limit_results = 10;

            //* Calcular o inicio da vizualização
            $start = ($limit_results * $page) - $limit_results;
            
            $sql=("SELECT y.idSecretary, y.nameSecretary, s.nameSchool 
            FROM secretarys y
            RIGHT JOIN schools s
            ON s.idSchool = y.idSchool
            ORDER BY s.nameSchool
            LIMIT $start, $limit_results");
            
            $result_instution = mysqli_query($conn,$sql);?>     
       
             
                <?php while ($row_instution = mysqli_fetch_assoc($result_instution)){ ?>
                    <tr>
                        <th><?php echo $row_instution['nameSchool']; ?></th>
                        <th><?php echo $row_instution['nameSecretary']; ?></th>
                    </tr>
                <?php }    ?>
        </tbody>
    </table>
    <!-- fim da tabela teste -->
    <?php
            //* Quantidade de paginas
            $query_qnt_register = "SELECT COUNT(idSchool) AS idSchool FROM schools";
            $result_qnt_register = $connection->prepare ($query_qnt_register);
            $result_qnt_register->execute();
            $row_qnt_register =$result_qnt_register->fetch(PDO::FETCH_ASSOC);
            
            //* Quantidade de paginas
            $qnt_page = ceil($row_qnt_register['idSchool']/$limit_results);

            //*Maximo de links 
            $max_link = 1;

            echo "<a href='institution-index.page.php?page=1'>Prev </a>";

            for($previous_page=$page-$max_link; $previous_page <= $page - 1; $previous_page++) {
                if($previous_page >= 1) {
                    echo "<a href='institution-index.page.php?page=$previous_page'> $previous_page </a>";
                }      
            }

            echo "<a href='#'>   $page   </a>";

            for($next_page = $page+1; $next_page <= $page + $max_link; $next_page++) {
                if($next_page <= $qnt_page) {
                    echo "<a href='institution-index.page.php?page=$next_page'> $next_page </a>";
                }
            }

            echo "<a href='institution-index.page.php?page=$qnt_page'> Next</a>";

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>