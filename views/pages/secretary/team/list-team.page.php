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
                                        <a class="dropdown-item" href="#">Editar</a>
                                        <a class="dropdown-item" href="#">Excluir</a>
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
                    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
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
                    <div class="col col 12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
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
            </div>
            <!-- fim cadastro em lote -->

        <!-- início da tabela teste -->
        <div class="container">
            <div class="list-background">
                <h3>Lista de turmas</h3>

                <?php while ($row = $listTeam->fetch(PDO::FETCH_BOTH)) { ?>
                    <?php echo $row[1] . '<br>'; ?>
                    <?php echo $row[2] . '<br>'; ?>
                    <?php echo $row[3] . '<br>'; ?>
                    <?php echo $row[4] . '<br>'; ?>
                    <a href="../controller/delete-team.php?idTeam=<?php echo $row[0]; ?>">Excluir</a>
                    <a href="#">Editar</a>
                    <?php echo '<hr>'; ?>
                <?php } ?>
            </div>
        </div>
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis velit illum autem aperiam asperiores sed dolor possimus repellendus corporis, laudantium molestiae temporibus consectetur tempore ex nihil ducimus labore. Fugiat, magni dolore ullam quia neque consectetur error in ipsam voluptatum, provident tenetur a beatae molestiae cumque dolor, delectus ratione laboriosam saepe nostrum nesciunt totam sunt optio! Cupiditate, provident sit similique fugit inventore, nam temporibus recusandae facilis eligendi blanditiis earum voluptatem saepe natus facere voluptate dolore. Reiciendis perspiciatis facere eos asperiores dolores odit, sit quidem facilis sed quisquam sapiente temporibus saepe exercitationem provident molestias autem vero ratione tenetur impedit! Eos porro repellendus inventore iusto quia cum rem ipsa quibusdam dolor soluta ab consequuntur consectetur, saepe reprehenderit dicta perspiciatis temporibus, facilis, eligendi eaque culpa? Earum quaerat soluta veritatis? Saepe laudantium neque doloribus. Inventore dolor impedit natus voluptatem quidem cumque quisquam. Beatae error accusantium eveniet voluptatibus modi omnis porro magni deserunt aperiam est. Accusamus exercitationem deleniti assumenda laborum, nostrum deserunt! Nostrum, fugit perspiciatis illo ipsum, est accusamus aut, maiores hic molestias natus incidunt corrupti exercitationem vero temporibus blanditiis dolorum modi nulla quibusdam officiis quo? Architecto sunt aut perferendis eveniet voluptatibus, omnis praesentium dignissimos aspernatur, fugiat, corporis explicabo quas laborum quaerat culpa libero ratione dolor ad repellendus similique id quod ipsa voluptate possimus hic? Molestias dolorem dignissimos aperiam non odio placeat facilis harum cum magnam tenetur quae officiis soluta fugiat temporibus aspernatur obcaecati ea doloribus hic nulla, natus omnis, illo deleniti aliquam! Reprehenderit ipsum ipsa magnam itaque obcaecati quibusdam hic harum, consequuntur voluptatem sint. Architecto fuga, aspernatur at impedit nisi velit eligendi dolor! Fuga odit obcaecati deserunt ut officia amet cum accusantium voluptas aliquid provident totam temporibus, necessitatibus et fugit corporis dicta exercitationem illo quos animi accusamus voluptatibus nihil, reprehenderit ipsam! Iste ipsum nobis accusantium ducimus dolorem iure veniam aspernatur sit voluptatum unde amet labore quo nulla ipsa molestiae, eius alias maxime. Cum similique, aspernatur deleniti fugit consequatur, corporis ut in labore itaque est minima maiores quod culpa. Culpa, numquam sint. Quis ullam corrupti porro est maxime atque repudiandae laudantium totam. Amet nam perspiciatis in non totam maxime dolores cumque aperiam veritatis corrupti dolor eos quia, cum nulla. Officiis nemo illo libero sunt consequatur quasi, nihil nostrum beatae perferendis repudiandae dolore magnam, quia minima qui quos harum dignissimos deleniti totam nobis dolorum nisi exercitationem optio. Aut, voluptas natus! Aliquid doloremque quidem eveniet? Odit fugiat minus cupiditate, sapiente error ullam earum harum veniam aperiam soluta suscipit et illo enim quas dolor veritatis tempora nesciunt corrupti nemo facere fugit. Optio sunt aliquam ut amet praesentium beatae officiis, ab nihil in delectus atque quia, quasi sit et, voluptatem eius incidunt commodi! Quisquam nam natus quaerat aut quo, ea architecto pariatur doloremque impedit consequatur obcaecati quae mollitia numquam a dolores culpa blanditiis consectetur eveniet corporis ullam. Modi odit dolorum ullam expedita deleniti, ex architecto dolore quos asperiores quisquam provident ipsam aperiam? Distinctio neque asperiores cupiditate deleniti repellendus maiores possimus, aliquam at, voluptates obcaecati nam debitis harum placeat repudiandae beatae! Corrupti quo fugit dolor ab temporibus voluptate nesciunt nam numquam.
        <!-- fim da tabela teste -->
          <!-- Animação da Emillie -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../js/index.scripts.js"></script>
    </body>

</html>