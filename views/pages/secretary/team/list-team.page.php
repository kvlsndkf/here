<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/Team.class.php');

$connection = Connection::connection();

try {
    $stmt = new Team();
    $listTeam = $stmt->list();
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
        <link rel="stylesheet" href="list-team.page.css">
        <link rel="shortcut icon" href="../../../images/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
        <title>Turmas | HERE!</title>
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
                                <a class="nav-link active font-header-hero current" href="../secretary-index.page.php">Home</a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle nav-link active font-header-hero" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Organização
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right customize-dropdown" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#" style="font-weight: var(--bold);  color: var(--medium-violet);">Cursos</a>
                                        <a class="dropdown-item" href="#" style="font-weight: var(--bold);  color: var(--medium-violet);">Turmas</a>
                                        <a class="dropdown-item" href="#" style="font-weight: var(--bold);  color: var(--medium-violet);">Matérias</a>
                                    </div>
                                </li>
                                <a class="nav-link active font-header-hero" href="./secretary/list-secretary.page.php">Estudantes</a>
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
                        <a href="./register-team-unit.page.php" class="link">
                            <div class="card position-relative dad-card">
                                <div class="card-body card-body-mine cb-unitario flex-column d-flex">Para fazer cadastro unitário<br/>clique aqui
                                    <br/>
                                    <img src="../../../images/logo.svg" alt="Logo HERE!" class="mini-logo-card position-absolute img-fluid">
                                    <img src="../../../images/mini-arrow-card.svg" alt="" class="mini-arrow-card position-absolute img fluid">
                                    <br/>
                                </div>
                            </div>
                        </a>
                    </div>
        <!-- fim cadastro unitário -->
        <!-- inicio cadastr em lote -->
                    <!-- <div class="col col 12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <a href="#">
                            <div class="card position-relative dad-card">
                                <div class="card-body card-body-mine cb-lote flex-column d-flex">Para fazer cadastro em lote</br>clique aqui
                                    <br/>
                                    <img src="../../../images/magenta-mini-logo.svg" alt="" class="mini-logo-card position-absolute img fluid">
                                    <img src="../../../images/mini-arrow-card.svg" alt="" class="mini-arrow-card position-absolute img fluid">
                                    </br>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->
            <!-- fim cadastro em lote -->

        <!-- início da tabela teste -->
        <div class="container formatting-list">
            <div class="background-list">
                <div class="info-list mx-auto">
                    <h5 class="p-4 list-title">Lista de turmas</h5>
                    <div class="search-section">
                            <div class="search-container position-relative">
                                <img src="../../../images/icon-search.svg" class="icon-search position-absolute" alt="">
                                <input type="text" name="" id="" placeholder="Pesquise pelo nome" class="search">
                            </div>
                        </div>
                        <br />
                    <div class="row">
                        <?php while ($row = $listTeam->fetch(PDO::FETCH_BOTH)) { ?>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="card list-card-body">
                                    <div class="card-body">
                                        <div class="d-flex flex-row-reverse">
                                            <li class="dropdown tres-p">
                                                <a class="dropdown dp" href="#" id="dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="../../../images/options-icon.svg" class="icon-kebab">
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right customize-dropdown" style="border-radius: 15px;" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="#" style="font-weight: var(--bold);  color: var(--medium-violet);">Editar</a>
                                                    <a class="dropdown-item" href="../controller/delete-team.php?idTeam=<?php echo $row[0]; ?>" style="font-weight: var(--bold); color: var(--medium-violet);">Excluir</a>
                                                </div>
                                            </li>
                                        </div>
                                        <p class="name-card">Nome</p>
                                        <?php echo '<p class="information-card">'. $row[1] . '</p>'; ?>
                                        <p class="name-card">Data de ingresso</p>
                                        <?php echo '<p class="information-card">'. $row[2] . '</p>'; ?>
                                        <p class="name-card">Módulo</p>
                                        <?php echo '<p class="information-card">'. $row[3] . '</p>'; ?>
                                        <p class="name-card">Curso</p>
                                        <?php echo '<p class="information-card">'. $row[4] . '</p>'; ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                            
                    </div>
            </div>
        </div>
        <br>
        
        <!-- fim da tabela teste -->
          <!-- Animação da Emillie -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../js/index.scripts.js"></script>
    </body>

</html>