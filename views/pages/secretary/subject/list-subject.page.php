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
<html lang="pt-br">

<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <meta name="description" content="Here é uma plataforma institucional com o foco de criar um canal que facilite a comunicação entre professores e seus alunos.">
            <link rel="stylesheet" href="../../../styles/style.css">
            <link rel="stylesheet" href="../../../styles/list-course.style.css">
            <link rel="shortcut icon" href="../../../images/favicon.png" type="image/x-icon">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
    <title>Matérias | HERE!</title>

</head>

<body>
        <!-- inicio menu -->
<div id="background-hero">
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container py-4">
        <!-- Foto -->
        <a class="navbar-brand logo-box" href="../../../../index.php">
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
                <a class="nav-link active font-header-hero" href="../secretary-index.page.php">Home</a>
                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle nav-link active font-header-hero current" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Organização
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right customize-dropdown" style="border-radius: 15px;" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="../course/list-course.page.php" style="font-weight: var(--extra-bold);">Cursos</a>
                                        <a class="dropdown-item" href="#" style="font-weight: var(--extra-bold);">Turmas</a>
                                        <a class="dropdown-item current" href="#" style="font-weight: var(--extra-bold);">Matérias</a>
                                    </div>
                                </li>
                <a class="nav-link active font-header-hero" href="../../secretary/list-secretary.page.php">Estudantes</a>
                <a class="nav-link active font-header-hero" href="#">Sair</a>
            </div>
        </div>
    </div>
</nav>
</div>
<!-- fim menu -->


 <!-- início cadastro unitario -->
 <div class="container px-4 container-cards">
        <div class="row gx-5 line">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="./register-subject-unit.page.php" class="link" id="card-button">
                    <div class="card position-relative dad-card">
                        <div class="card-body card-body-mine cb-unitario flex-column d-flex">Para fazer cadastro unitário<br />clique aqui
                            <br />
                            <img src="../../../images/logo.svg" alt="Logo HERE!" class="mini-logo-card position-absolute img-fluid">
                            <img src="../../../images/mini-arrow-card.svg" alt="" class="mini-arrow-card position-absolute img fluid">
                            <br />
                        </div>
                    </div>
                </a>
            </div>

            <!-- fim cadastro unitario -->

        <!-- início da tabela -->


        <!-- inicio lista professores -->
        <div class="container formatting-list">
                <div class="background-list">

                    <h5 class="pt-4 list-title">Lista de Matérias</h5>

                    <div class="info-list mx-auto">
                        <div class="search-section">
                            <div class="search-container position-relative">
                                <img src="../../../images/icon-search.svg" class="icon-search position-absolute" alt="">
                                <input type="text" name="" id="" placeholder="Pesquise pelo nome" class="search">
                            </div>
                        </div>
                      <br>
                        <!-- cards -->

                        <div class="row">
                        <?php for ($i = 0; $i < count($listSubjects); $i++) {
                        $row = $listSubjects[$i];?>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card list-card-body">
                                        <div class="card-body">
                                        <div class="d-flex flex-row-reverse">
                                            <li class="dropdown tres-p">
                                                    <a class="dropdown dp" href="#" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="../../../images/tres-pontinhos.svg" class="icon-kebab">
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right customize-dropdown" style="border-radius: 15px;" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="#" style="font-weight: var(--bold);  color: var(--medium-violet);">Editar</a>
                                                        <a class="dropdown-item" href="../controller/delete-subject.php?idSubject=<?php echo $row->idSubject; ?>" style="font-weight: var(--bold); color: var(--medium-violet);">Excluir</a>
                                                    </div>
                                                </li>
                                        </div>
                                            <?php echo '<div class="name-card"> Nome </div><div class="information-card">' . $row->nameSubject . '</div>' ?>
                                            <?php echo '<div class="name-card"> Turma </div><div class="information-card">' . $row->team . '</div>' ?>
                                            <div class="name-card">Professor </div>
                                            <?php for ($j = 0; $j < count($row->professor); $j++) {
                                    $professor = $row->professor[$j];?>
                                                <?php echo '<div class="information-card-etec"> ' . $professor['nameProfessor'] . '</div>'; ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            //*Pagina atual
            $current_page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
            $page = (!empty($current_page)) ? $current_page : 1;

            //* Setar a quantidade de registros por pagina
            $limit_results = 10;

            //* Quantidade de paginas
            $query_qnt_register = "SELECT COUNT(idSubject) AS idSubject FROM subjects";
            $result_qnt_register = $connection->prepare($query_qnt_register);
            $result_qnt_register->execute();
            $row_qnt_register = $result_qnt_register->fetch(PDO::FETCH_ASSOC);

            //* Quantidade de paginas
            $qnt_page = ceil($row_qnt_register['idSubject'] / $limit_results);


            //*Verificar a pagina anterior e posterios
            $back_page = $page - 1;
            $next_page = $page + 1;
            ?>
                <ul class="pagination">
                    <?php
                    if ($back_page != 0) { ?>
                        <li class="page-item ">
                            <a class="page-link" href="list-subject.page.php?page=<?php echo $back_page; ?>">Prev</a>
                        </li>
                    <?php  } else { ?>
                        <li class="page-item disabled">
                            <a class="page-link">Prev</a>
                        </li>
                    <?php }   ?>

                    <?php
                    for ($i = 1; $i < $qnt_page + 1; $i++) {  ?>
                        <li class="page-item">
                            <a class="page-link" href="list-subject.page.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php } ?>

                    <?php
                    if ($next_page <= $qnt_page) { ?>
                        <li class="page-item ">
                            <a class="page-link" href="list-subject.page.php?page=<?php echo $next_page; ?>">Next</a>
                        </li>
                    <?php  } else { ?>
                        <li class="page-item disabled">
                            <a class="page-link">Next</a>
                        </li>
                    <?php }   ?>
                </ul>



                </div>
    </div>

    <!-- Fim da Tabela -->


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../js/index.scripts.js"></script>

</body>

</html>