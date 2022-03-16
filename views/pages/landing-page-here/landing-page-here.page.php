<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="description" content="Here é uma plataforma institucional com o foco de criar um canal que facilite a comunicação entre professores e seus alunos.">
        <link rel="stylesheet" href="../../styles/style.css">
        <link rel="stylesheet" href="./hero.style.css">
        <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
        <script type="text/javascript" src="/views/js/index.scripts.js"></script>
        <title>HERE!</title>
    </head>

    <body>
        <!-- NAVBAR -->
        <div id="background-hero">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container py-4">
                    <!-- Foto -->
                    <a class="navbar-brand logo-box" href="./index.php">
                        <img src="../../images/logo.svg" class="logo" alt="Logo HERE!">
                        <span class="logo-name">Here!</span>
                    </a>
                    <!-- Toggle -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menus -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav animate-menu">
                            <a class="nav-link active font-header-hero" href="#resources">Recursos</a>
                            <a class="nav-link active font-header-hero" href="#">Comunidade</a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- CONTEÚDO PARTE 1 -->
            <div class="container" id="start">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 d-flex align-items-center">
                        <div>
                            <p class="title-1 text-center text-sm-center text-md-left text-lg-left text-xl-left">Aprenda melhor juntos</p>
                            <p class="text-1 text-center text-sm-center text-md-left text-lg-left text-xl-left">Uma plataforma que facilitará a comunicação <br /> entre aluno e professor.</p>

                            <div class="d-flex justify-content-lg-start justify-content-md-start justify-content-sm-center justify-content-center">
                                <a href="../login/login.page.php">
                                    <div class="btnEntrar-1 d-flex align-items-center">
                                        <div class="label-entrar-hero">
                                            Entrar
                                        </div>
                                        <div class="arrow-hero">
                                            <img src="../../images/arrow-bt.svg" alt="Seta indicando a entrada no HERE!">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="arrow-down-hero d-flex justify-content-lg-start justify-content-md-start justify-content-sm-center justify-content-center">
                                <img src="../../images/arrows-down.svg" alt="Seta indicando o scroll da página">
                            </div>
                        </div>
                    </div>

                    <div class="d-none d-sm-flex d-md-flex d-lg-flex col-md-6 col-sm-12 col-xs-12">
                        <div class="right-picture">
                            <img src="../../images/img1.svg" class="image-1 img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTEÚDO PARTE 2 -->
        <div class="body" id="resources">
            <h6 class="title1"> APROVEITE AO MÁXIMO</h6>
            <div>
                <h1 class="title2">Explore os recursos</h1>
            </div>
            <div class="container-card">
                <!-- Inicio do primeiro Card, o da agenda-->
                <div class="card">
                    <div class="content">
                        <img src="../../images/agenda.svg" class="img">
                        <span class="titleG">Agenda</span>

                        <div class="textG">
                            Tenha uma agenda sempre a sua disposição e não perca
                            mais o dia da entrega de atividades!
                        </div>
                    </div>
                </div>

                <!-- Inicio do segundo Card, o da Tarefa-->
                <div class="card">
                    <div class="content">
                        <img src="../../images/tarefas.svg" class="img">
                        <span class="titleG">Tarefa</span>

                        <div class="textG">
                            Um lugar fácil, prático<br>
                            e rápido para a entrega
                            e correção de atividades!
                        </div>
                    </div>
                </div>

                <!-- Inicio do terceiro Card, o do Material da aula-->
                <div class="card">
                    <div class="content">
                        <img src="../../images/aula.svg" class="img">
                        <span class="titleG">Materiais da aula</span>

                        <div class="textG">
                            Todos os materiais ultilizados
                            em aula disponíveis para cunsulta
                            a qualquer hora do dia!
                        </div>
                    </div>
                </div>

                <!-- Inicio do Quarto card, o do Chat -->
                <div class="card">
                    <div class="content">
                        <img src="../../images/chat.svg" class="img">
                        <span class="titleG">Chat</span>

                        <div class="textG">
                            Converse com professores
                            para tirar suas dúvidas!
                        </div>
                    </div>
                </div>
                <!-- Final do Quarto card-->
            </div>
        </div>
        <footer>
            <div class="footer-background">
                <div class="container">
                    <div class="footer-head-content">
                        <p class="poupe-tempo">
                            POUPE TEMPO E SIMPLIFIQUE TAREFAS
                        </p>
                        <p class="futuro-comeca">
                            O futuro começa aqui
                        </p>
                        <div class="d-flex justify-content-lg-center justify-content-md-center justify-content-sm-center justify-content-center">
                            <a href="../login/login.page.php">
                                <div class="btnEntrar-2 btn-final d-flex align-items-center">
                                    <div class="label-entrar-hero">
                                        Entrar
                                    </div>
                                    <div class="arrow-hero">
                                        <img src="../../images/arrow.svg" alt="Seta indicando a entrada no HERE!">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="footer-end-content">
                        <div class="row">
                            <p class="footer-text plataforma col-xl-4 col-lg-4 col-md-4 col-sm-12">
                               <a href="#resources"> Plataforma </a>
                            </p>
                            <p class="footer-text comunidade col-xl-4 col-lg-4 col-md-4 col-sm-12">
                               <a href=""> Comunidade </a>
                            </p>
                            <p class="footer-text fale col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <a href=""> Fale conosco </a>
                            </p>
                        </div>
                        <br>
                        <div class=" d-flex justify-content-end">
                            <a href="#start"><img src="../../images/back-button.svg" alt="Botão de voltar ao início da página" class="back-button"></a>
                        </div>
                        <hr class="final-line">
                        <div class="row">
                            <p class="copyright text-center mx-auto">
                                Copyright © Cold Wolf - 2022. Todos os direitos reservados.
                            </p>
                        </div>
                        
                    </div>
            </div>
        </footer>
        <!-- Animação da Emillie -->
        <script type="text/javascript" src="../../js/index.scripts.js"></script>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Animação dos cards da Paloma -->
        <script type="text/javascript" src="../../js/vanilla-tilt.js"></script>
        <script>
            VanillaTilt.init(document.querySelectorAll("div.card"), {
                max: 25,
                speed: 400
            });
        </script>
    </body>

</html>