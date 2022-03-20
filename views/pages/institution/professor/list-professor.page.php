<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
include_once('/xampp/htdocs' . '/here/classes/users/Professor.class.php');

$connection = Connection::connection();

try {
    $stmt = new Professor();
    $listProfessor = $stmt->list();
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
            <link rel="stylesheet" href="../../../styles/style.css">
            <link rel="stylesheet" href="list-professor.professor.css">
            <link rel="shortcut icon" href="../../../images/favicon.png" type="image/x-icon">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
            <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
        <title>Professores | HERE!</title>
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
                            <a class="nav-link active font-header-hero" href="#resources">Home</a>
                            <a class="nav-link active font-header-hero" href="../school/list-school.page.php">ETEC's</a>
                            <a class="nav-link active font-header-hero" href="../secretary/list-secretary.page.php">Secretaria</a>
                            <a class="nav-link active font-header-hero current" href="list-professor.page.php">Professores</a>
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
                        <a href="./register-professor-unit.page.php" class="link">
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
                    
        <!-- fim cadastro unitario -->
        <!-- inicio cadastro em lote -->
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
        <!-- fim cadastro em lote-->

        
        <!-- inicio lista professores -->
        <div class="container formatting-list">
            <div class="background-list">
                
                <h5 class="p-4 list-title">Lista de professores</h5>

                <div class="info-list mx-auto">
                <div class="search-section">
                        <div class="search-container position-relative">
                            <img src="../../../images/icon-search.svg" class="icon-search position-absolute" alt="">
                            <input type="text" name="" id="" placeholder="Pesquise pelo nome" class="search">
                        </div>
                </div>
                <br/>
                <!-- cards -->
                
                <div class="row">
                    
                        <?php while ($row = $listProfessor->fetch(PDO::FETCH_BOTH)) { ?>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="card list-card-body">
                                        <div class="card-body">
                                            <?php echo '<div class=name-card> Nome <br>' . $row[0] . '</div><br>' ?>
                                            <?php echo '<div class=name-card> Email <br>' . $row[1] . '</div><br>' ?>
                                        </div>
                                    </div>
                                </div>
                            
                        <?php } ?>
                    </div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe similique deserunt illo tempora beatae delectus expedita aspernatur, quisquam fuga corporis eveniet alias vitae! Beatae itaque molestiae eligendi exercitationem nam sint corporis quaerat a necessitatibus explicabo nemo, perferendis labore sit. Soluta atque eligendi obcaecati eum quos repellat dolores ratione enim provident! Rem eos, eligendi ex ipsam quasi rerum ea voluptate voluptates architecto explicabo unde. Accusantium, non. Officiis iusto quos provident, ipsum dignissimos sit sequi. Quidem cumque voluptate quos ex sit sint eligendi eius molestias rerum praesentium porro at rem cupiditate enim numquam nisi, inventore facere tempora sequi et repellat quisquam, recusandae animi temporibus. At eveniet, placeat ex voluptas cumque sequi temporibus sit ipsam voluptates sint enim dolor soluta blanditiis laboriosam modi atque rerum deleniti nisi tenetur, adipisci optio aperiam culpa earum. Ea accusantium odio tenetur, recusandae et delectus nostrum pariatur, hic doloremque eos amet fugit unde assumenda nisi quae perferendis ut, non in quisquam? Odit ipsa quas recusandae nulla cupiditate praesentium neque vero sit at a laborum nam perspiciatis dolore eligendi est nobis numquam doloremque culpa, voluptates, alias ipsum eum quibusdam facilis. Ratione ex ab veritatis asperiores pariatur explicabo velit ipsum quod sunt aspernatur hic, praesentium fugit possimus aut tempore reiciendis atque illo eos officiis odio optio quia? Quo ullam eius voluptates saepe maxime necessitatibus laboriosam fugit. Cum possimus doloribus quam culpa minus explicabo ea, modi atque. Vitae sit veniam debitis. Possimus ipsa voluptas odit inventore tempore dolorem porro illo sequi molestiae maiores recusandae nostrum harum adipisci, doloremque, iure consectetur et reiciendis modi eius natus! Ut mollitia excepturi porro laborum earum quidem, est, nam minima totam corrupti officiis architecto voluptates, aspernatur quia. Sequi iusto autem voluptate veritatis ea suscipit itaque aut possimus, eveniet amet tempore nam accusantium commodi debitis adipisci consectetur. Asperiores, vero recusandae mollitia inventore est possimus repellat ipsa, rerum odio maiores suscipit, quis minima quam. Tempora ipsa quos facere ut explicabo nesciunt maiores, impedit, veniam non ratione aspernatur? Incidunt autem nesciunt, illo dolorum, laboriosam, odio eaque vitae harum iusto animi omnis earum deserunt qui aliquam et eum quas totam quos ipsum architecto culpa suscipit inventore. Molestias, nam! Nesciunt, eius facere dolores maiores deleniti voluptates! Voluptates ad porro aliquam illum ipsa in sint nemo adipisci, perspiciatis quisquam, nisi eligendi amet veritatis natus magnam nulla. Rerum vero culpa similique asperiores architecto odit placeat aliquid commodi perferendis, quam nemo fugiat dolorum. Iure vero repellat tenetur amet suscipit! Quaerat, fugiat. Unde nulla explicabo voluptas velit esse, facere, eveniet maiores quod hic rerum praesentium voluptatum iste optio alias doloribus modi cum iusto tempora molestiae repellendus quae provident autem aspernatur cumque. Aut optio maxime nisi veniam dolore. Rerum quisquam distinctio deserunt dolores, beatae dolorum veniam ex at ipsam corporis quia hic dolor quos sunt minima, ea vero, itaque nulla nihil. Illum iure magnam blanditiis quibusdam in nulla culpa alias earum incidunt nesciunt? Pariatur cupiditate odio vitae aspernatur ea. Recusandae et, eaque illum perferendis doloribus explicabo nesciunt distinctio accusamus architecto, reiciendis pariatur ea ipsam veritatis libero neque nobis. Totam illum cum consectetur? Nulla consequuntur dolorum consectetur!
                </div>
            </div>
        </div>
        

        <!-- fim da tabela teste -->
        <!-- Animação da Emillie -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../../../js/index.scripts.js"></script>
        
    </body>

</html>