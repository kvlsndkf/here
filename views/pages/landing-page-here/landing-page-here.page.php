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
        <div class="container">
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
                        <img src="../../images/img1.svg" class="image-1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte da Paloma -->
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

<!--PARTE ARTHUR-->    
    <div class="comunidade-p">       
                            <div id="comunidade">
                                <p>Comunidade</p>
                            </div>
                                    <!--TEXTO-->
                                <h1 class="title-1 text-center text-sm-center text-md-left text-lg-left text-xl-left" id="title01"> Esclareça suas dúvidas com alunos e professores </h1>
                                    <!--TEXTO-->
                                    <h2 class="title-1 text-center text-sm-center text-md-left text-lg-left text-xl-left" id="title02"> Mural coletivo que possibilita fazer perguntas e respondê-las através da contribuição de alunos e professores! Incentivando o trabalho em equipe e disseminando conhecimento por toda comunidade.</h2>
                                    <!--TEXTO-->
                                    <h3 class="title-1 text-center text-sm-center text-md-left text-lg-left text-xl-left" id="title03"> Ganhe conquistas e etiquetas<br> especiais ajudando a comunidade </h3>
                    

            <!--FIM TEXTO-->
                    
         
         <!--SETA-->
         
                        <div class="seta">
                            <div id="svg">
                                <svg width="220" height="70" viewBox="0 0 220 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 68.4999C26.3333 40.9999 102.6 -7.00006 217 20.9999M217 20.9999L205 2M217 20.9999L205 39.5" stroke="url(#paint0_linear_245_978)" stroke-width="4"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_245_978" x1="-2" y1="74.5" x2="217" y2="20.5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#9710A1"></stop>
                                        <stop offset="1" stop-color="#F22C57"></stop>
                                        </linearGradient>
                                    </defs>
                                        </svg>
                            </div>
                        </div>
         
                <!--DISPLAY BRANCO-->
                            <div id="display">
                                <img src="../../images/display.svg" alt="">
                            </div>
         
         
                        <!-- XP -->
         
                            <div id="xp">
                            <img src="../../images/Rectangle 269.svg" alt="">
                            
                            </div>
         
                            <div id="nxp" style="width: 49px; height: 20px;">
                            <p>15461xp</p>
                            </div>
         
         
                        <!-- LEVEL-->
                              <div id="level">  <img src="../../images/lvl.svg" alt="">
                            </div>
                        <!--Fim Level-->
         
                               
         
                        <!--PERFIL-->
         
                        <div id="perfil">
                        <img src="../../images/title.svg" alt="">
                        </div>
         
         
                        <div id="camp">
                                <img src="../../images/perfilCamp.svg" alt="">
                         </div>
                        <!--INFORMAÇÕES-->
         
                        <div id="info">
                        <img src="../../images/info.svg" alt="">
                        </div>
         
                        <!--CONQUISTAS-->
         
                        <div id="conquista">
                        <img src="../../images/Conquistas.svg" alt="">
                        </div>
         
                        <!--Inicio div Ballon-->
                        <div>
                            <div id="triangle">
                            <img src="../../images/triangleR.svg" alt="">
                            </div>
         
                            <div id="ballon">
                                <img src="../../images/rect(2).svg" alt="">
                            </div>
                        </div>

                        
                        <!--Fim div Ballon-->
         
                        <!--PERGUNTAS-->
         
                        <div id="pergunta">
                        <img src="../../images/pergunta.svg" alt="">
                        </div>
                        <!--Fim div Pergunta-->
         
         
         
                        <!-- 1º Primeiro Lugar-->
                        <div id="first">
                            <img src="../../images/1.svg" alt="">
         
                        </div>
         
         
         
                        <div id="team">
                            <img src="../../images/team.svg" alt="">
         
                        </div>
         
                        <div id="target">
                        <img src="../../images/target.svg" alt="">
                        </div>
         
                        <div id="binocolo">
                        <img src="../../images/binoculars.svg" alt="">
         
                        </div>
         
         
         
                        <div id="foguete">
                        <img src="../../images/success.svg" alt="">
         
                        </div>
         
         
                        <div id="star">
                        <img src="../../images/star.svg" alt="">
                        </div>
     </div>
</body>

</html>