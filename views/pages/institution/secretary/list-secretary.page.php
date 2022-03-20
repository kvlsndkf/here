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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                <th>Ações</th>
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

            $query_secretary = "SELECT * FROM secretarys s
                                ORDER BY s.nameSecretary
                                LIMIT $start, $limit_results";
            $result_secretary = $connection->prepare($query_secretary);
            $result_secretary->execute();

            if (($result_secretary) and ($result_secretary->rowcount() != 0)) {
                while ($row_secretary = $result_secretary->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<th>" . $row_secretary['nameSecretary'] . "</th>";
                    echo "<th>" . $row_secretary['emailSecretary'] . "</th>";
                    echo "<th>" . $row_secretary['passwordSecretary'] . "</th>";
                    echo "<th><a href=# > Editar  </a> </td> ";
                    echo "<th><a href=# > Excluir  </a> </td> ";
                    echo "</tr>";
                }

            } else {
                echo "<p style ='color : #f00;'>Erro: Nenhum usuario encontrado!</p></p>";
            }
            ?>

        </tbody>
    </table>
    <!-- fim da tabela teste -->
    <?php
            //* Quantidade de paginas
            $query_qnt_register = "SELECT COUNT(idSecretary) AS idSecretary FROM secretarys";
            $result_qnt_register = $connection->prepare ($query_qnt_register);
            $result_qnt_register->execute();
            $row_qnt_registros =$result_qnt_register->fetch(PDO::FETCH_ASSOC);
            
            //* Quantidade de paginas
            $qnt_page = ceil($row_qnt_registros['idSecretary']/$limit_results);

            //*Maximo de links 
            $max_link = 1;

            echo "<a href='list-secretary.page.php?page=1'>Prev </a>";

            for($previous_page=$page-$max_link; $previous_page <= $page - 1; $previous_page++) {
                if($previous_page >= 1) {
                    echo "<a href='list-secretary.page.php?page=$previous_page'> $previous_page </a>";
                }      
            }

            echo "<a href='#'>   $page   </a>";

            for($next_page = $page+1; $next_page <= $page + $max_link; $next_page++) {
                if($next_page <= $qnt_page) {
                    echo "<a href='list-secretary.page.php?page=$next_page'> $next_page </a>";
                }
            }

            echo "<a href='list-secretary.page.php?page=$qnt_page'> Next</a>";

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>