<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="description" content="Here é uma plataforma institucional com o foco de criar um canal que facilite a comunicação entre professores e seus alunos.">
    <link rel="stylesheet" href="./views/styles/style.css">
    <link rel="stylesheet" href="./hero.style.css">
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./recursos.style.css">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Manrope:wght@200;300;400;500;600;700;800&family=Sulphur+Point:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="/views/js/index.scripts.js"></script>
    <title>HERE!</title>
</head>

<body>
    <!-- NAVBAR -->
    <div class="container">
        <header>
            <div class="logo-box">
                <img src="../../images/logo.svg" class="logo" alt="Logo HERE!">
                <p class="logo-name">Here!</p>
            </div>
            <ul>
                <li><a href="#" class="a"></a>Recursos</li>
                <li><a href="#" class="a"></a>Comunidade</li>
            </ul>
        </header>
    </div>
    <!-- CONTEÚDO PARTE 1 -->
    <div class="container">
        <div class="part-1">
            <div class="left-1">
                <p class="title-1">Aprenda melhor juntos</p>
                <p class="text-1">Uma plataforma que facilitará a comunicação <br /> entre aluno e professor.</p>
                <input type="button" value="Entrar" class="btnEntrar-1">
            </div>
            <div class="right-1">
                <img src="../../images/img1.svg" class="image-1">
            </div>
        </div>
    </div>
    </div>

    <!-- Parte da Paloma -->
    <div class="body">
        <div>
            <h6 class="title1"> APROVEITE O MAXIMO</h6>
        </div>
        <div>
            <h1 class="title2">EXPLORE OS RECURSOS </h1>
        </div>

        <div class="container">
            <!-- Inicio do primeiro Card, o da agenda-->
            <div class="card">
                <div class="content">
                    <img src="../../images/agenda.png" class="img">
                    <p class="titleG">Agenda</p>

                    <h4 class="textG">Tenha uma agenda sempre
                        <br>a sua disposição e não perca
                        <br>mais o dia da
                        entrega de atividades!
                    </h4>

                </div>
            </div>
            <!-- Inicio do segundo Card, o da Tarefa-->
            <div class="card">
                <div class="content">
                    <img src="../../images/tarefas.png" class="img">
                    <p class="titleG">Tarefa</p>

                    <h4 class="textG"> Um lugar fácil, prático<br>
                        e rápido para a entrega
                        e<br> correção de atividades!</h4>

                </div>
            </div>
            <!-- Inicio do terceiro Card, o do Material da aula-->
            <div class="card">
                <div class="content">
                    <img src="../../images/aula.png" class="img">
                    <p class="titleG">Materiais da aula</p>

                    <h4 class="textG"> Todos os materiais ultilizados
                        em aula <br> disponíveis para
                        cunsulta <br> a qualquer hora do <br>
                        dia! </h4>


                </div>
            </div>
            <!-- Inicio do Quarto card, o do Chat -->
            <div class="card">
                <div class="content">
                    <img src="../../images/chat.png" class="img">
                    <p class="titleG">Chat</p>

                    <h4 class="textG">Converse com professores
                        <br>para tirar suas dúvidas!<br>
                    </h4>

                </div>
            </div>
            <!-- Final do Quarto card-->

        </div>
        <!-- Finalização da div principal -->
    </div>
    <!-- Animação dos cards -->
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400
        });
    </script>
    <!-- Finalização da animação -->
</body>

</html>