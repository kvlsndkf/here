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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="description" content="Here é uma plataforma institucional com o foco de criar um canal que facilite a comunicação entre professores e seus alunos.">
    <link rel="stylesheet" href="../../../styles/style.css">
    <link rel="stylesheet" href="list-secretary.style.css">
    <link rel="shortcut icon" href="../../../images/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
    <title>Secretarias | HERE!</title>


</head>

<body>
    <!-- inicio menu -->
    <div id="background-hero">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container py-4">
                <!-- Foto -->
                <a class="navbar-brand logo-box" href="./index.php">
                    <img src="../../../images/logo.svg" class="logo" alt="Logo HERE!">
                    <span class="logo-name">Here!</span>
                </a>
                <!-- Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menus -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav animate-menu navbar-mine">
                        <a class="nav-link active font-header-hero " href="../institution-index.page.php">Home</a>
                        <a class="nav-link active font-header-hero" href="../school/list-school.page.php">ETEC's</a>
                        <a class="nav-link active font-header-hero current" href="./secretary/list-secretary.page.php">Secretaria</a>
                        <a class="nav-link active font-header-hero" href="#">Professores</a>
                        <a class="nav-link active font-header-hero" href="#">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- fim menu -->

    <!-- início card cadastro unitário-->

    <div class="container px-4 container-cards">
        <div class="row gx-5 line">
            <!-- <div class="col col-12 col-sm-10 col-md-12 col-lg-12 col-xl-6"> -->
            <div class="col-12 col-sm-12 col-md-12">
                <a href="./register-secretary.page.php" id="card-button" value="Cadastrar ETEC">
                    <div class="card position-relative dad-card">
                        <div class="card-body card-body-mine cb-secretary flex-column d-flex">Para fazer cadastro unitário <br> clique aqui
                            <br />
                            <tr>
                                <div style="font-size: 35px">
                                    <th>→</th>
                                </div>
                            </tr>
                            <img src="../../../images/logo.svg" alt="Logo HERE!" class="mini-logo-card position-absolute img-fluid">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- fim card cadastro unitário -->


    <!-- início da tabela teste -->
    <div class="container">
        <div class="table-background mx-auto p-4 ">
            <div class="table-title">
                <h5 class="p-2 table-title">Lista de secretarias </h5>
            </div>

            <!-- Barra de Pesquisa -->

            <div class="search-section">
                <div class="search-container position-relative">
                    <img src="../../../images/icon-search.svg" class="icon-search position-absolute" alt="">
                    <input type="text" name="" id="" placeholder="Pesquise pelo nome" class="search">
                </div>
            </div>
            <!--  fim Barra de Pesquisa -->
            <br />
            <div class="table-responsive">
            <table class="table table-striped info-table ">
                <thead>
                    <tr>
                        <th scope="col" class="th-title ">Nome</th>
                        <th scope="col" class="th-title ">E-mail</th>
                        <th scope="col" class="th-title">Etec</th>
                        <th scope="col" class="th-title col-2">Ações</th>

                        <!-- Listagem de conteúdos da Tabela -->

                    </tr>
                </thead>
                <tbody>

                    <?php while ($row = $listSecretary->fetch(PDO::FETCH_BOTH)) { ?>
                        <tr class="th col-12">

                            <th class="th"><?php echo $row[1]; ?></th>
                            <th class="th"><?php echo $row[2]; ?></th>
                            <th class="th"><?php echo $row[3]; ?></th>


                            <td>
                                <div class="divo">
                                    <div class="botao-edit butao">
                                        <a href="">
                                            <img src="../../../images/lapis.svg" class="trash">
                                        </a>
                                    </div>


                            <!-- Listagem de conteúdos da Tabela -->

                        </tr>
                        <?php }?>
                    </thead>
                    <tbody>

                        <?php while ($row = $listSecretary->fetch(PDO::FETCH_BOTH)) { ?>
                            <tr class="th col-12">

                                <th class="th"><?php echo $row[0]; ?></th>
                                <th class="th"><?php echo $row[1]; ?></th>
                                <th class="th"><?php echo $row[3]; ?></th>


                                <td>
                                    <div class="divo">
                                        <div class="botao-edit butao">
                                            <a href="">
                                                <img src="../../../images/lapis.svg" class="trash">
                                            </a>
                                        </div>

                                        <div class="botao-edit butao2">
                                            <a href="../controller/delete-secretary.php?idSecretary=<?php echo $row[0]; ?>">
                                                <img src=" ../../../images/trash-can.svg" class="trash">

                                            </a>
                                            </th>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        <?php } ?>

                    </tbody>

                </table>
            </div>
        </div>
        <?php

            //*Pagina atual
            $current_page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
            $page = (!empty($current_page)) ? $current_page : 1;

            //* Setar a quantidade de registros por pagina
            $limit_results = 10;

            //* Quantidade de paginas
            $query_qnt_register = "SELECT COUNT(idSecretary) AS idSecretary FROM secretarys";
            $result_qnt_register = $connection->prepare($query_qnt_register);
            $result_qnt_register->execute();
            $row_qnt_registros = $result_qnt_register->fetch(PDO::FETCH_ASSOC);

            //* Quantidade de paginas
            $qnt_page = ceil($row_qnt_registros['idSecretary'] / $limit_results);

            //*Verificar a pagina anterior e posterios
            $back_page = $page - 1;
            $next_page = $page + 1;
            ?>
            <ul class="pagination justify-content-center pt-4 ala">
                <?php
                if ($back_page != 0) { ?>
                    <li class="page-item ala">
                        <a class="page-link" href="list-secretary.page.php?page=<?php echo $back_page; ?>">Anterior</a>
                    </li>
                <?php  } else { ?>
                    <li class="page-item disabled">
                        <a class="page-link">Anterior</a>
                    </li>
                <?php }   ?>

                <?php
                for ($i = 1; $i < $qnt_page + 1; $i++) {  ?>
                    <li class="page-item">
                        <a class="page-link" href="list-secretary.page.php?page=<?php echo $i; ?>"><?php echo '<div class="pagination-style">'. $i .'</div>' ?></a>
                    </li>
                <?php } ?>

                <?php
                if ($next_page <= $qnt_page) { ?>
                    <li class="page-item ">
                        <a class="page-link" href="list-secretary.page.php?page=<?php echo $next_page; ?>">Próximo</a>
                    </li>
                <?php  } else { ?>
                    <li class="page-item disabled">
                        <a class="page-link">Próximo</a>
                    </li>
                <?php }   ?>
            </ul>
        </div>
        <!-- fim da tabela teste -->
        <br />

        <!-- Animação da Emillie -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../js/index.scripts.js"></script>
</body>

</html>