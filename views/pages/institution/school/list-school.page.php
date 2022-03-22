<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');

$connection = Connection::connection();

try {
    $stmt = new School();
    $listSchools = $stmt->listSchools();
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
        <link rel="stylesheet" href="../../../styles/list-school.style.css">
        <link rel="shortcut icon" href="../../../images/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
    <title>ETEC's | HERE!</title>
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
                            <a class="nav-link active font-header-hero" href="../institution-index.page.php">Home</a>
                            <a class="nav-link active font-header-hero current" href="../school/list-school.page.php">ETEC's</a>
                            <a class="nav-link active font-header-hero" href="../secretary/list-secretary.page.php">Secretaria</a>
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
                    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <a href="./register-school-unit.page.php" id="card-button" value="Cadastrar ETEC">
                        <div class="card position-relative dad-card">
                            <div class="card-body card-body-mine cb-secretary flex-column d-flex">Para fazer cadastro unitário <br> clique aqui
                                <br/>
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
        <!-- fim card cadastro unitário -->

        <!-- inicio card cadastro em lote -->
                    <div class="col col 12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <a href="./register-school-batch.page.php" id="card-button">
                        <div class="card position-relative dad-card">
                            <div class="card-body card-body-mine cb-cad-lote flex-column d-flex">Para fazer cadastro em lote <br> clique aqui
                                <br/>
                                    <tr>
                                        <div style="font-size: 35px">
                                            <th>→</th>
                                        </div>
                                    </tr>
                                <img src="../../../images/here-icon.svg" alt="" class="mini-logo-card position-absolute img fluid">
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
        </div>
        <!-- fim card cadastro em lote -->

        <!-- início da tabela -->

        <div class="container">
                <div class="table-background mx-auto p-4 col-12">
                    <div class="table-title">
                        <h5 class="p-2 table-title">Lista de ETEC's</h5>
                    </div>

                    <!-- Barra de Pesquisa -->

                    <div class="search-section">
                        <div class="search-container position-relative">
                        <img src="../../../images/icon-search.svg" class="icon-search position-absolute" alt="">
                            <input type="text" name="" id="" placeholder="Pesquise pelo nome" class="search">
                        </div>
                    </div>
                    <br/>

                    <table class="table table-striped info-table">
                        <thead>
                            <tr>
                                <th scope="col" class="th-title col-10">Nome</th>
                                <th scope="col" class="th-title2 col-2">Ações</th>
                                
                    <!-- Listagem de conteúdos da Tabela -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $listSchools->fetch(PDO::FETCH_BOTH)) { ?>
                                <tr>
                                    <th class="th col-10">
                                        <?php echo $row[1]; ?>
                                    </th>
                                    
                                    <td class="td col-2">
                                        <div class="divo">
                                            <div class="botao-edit butao">
                                                <a href="./forms-update-school-page.php?updateSchool=<?php echo $row[0]; ?>">
                                                <img src="../../../images/lapis.svg" class="trash">
                                                </a>
                                            </div>
                                            <div class="botao-edit butao2">
                                                <a href="../controller/delete-school.php?idSchool=<?php echo $row[0]; ?>">
                                                    <img src="../../../images/trash-can.svg" class="trash">
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
        </div>
        <!-- fim da tabela -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../js/index.scripts.js"></script>
    </body>

</html>


