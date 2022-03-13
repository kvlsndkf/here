<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link href="./painel-usuario.css" rel="stylesheet">
    <link href="../../styles/style.css" rel="stylesheet">

    <title>Painel de Usuários</title>
</head>
<body>

    <!-- Navbar Voltar -->
    <nav class="navbar">

        <!-- Classe container para que o container do site seja igual em todas a páginas -->
        <div class="container">
            <a class="botaovoltar" href="../landing-page-here/landing-page-here.page.php">
                <img src="../../images/botaovoltar.svg" alt="">
            </a>
        </div>
    </nav>

    <div class="containerfundo">
        <div class="container">
            <div class="content">
                <img src="../../images/logo-escrita-login.svg" class="img1">
                <h1 class="txt"> O que você é?</h1>
            </div>

            <div class="container-card">
                <!-- Inicio do primeiro Card, o Institucional-->

                <div class="card">
                    <div class="content">
                        <a href="#">
                        <img src="../../images/institucional.svg" class="img">
                        </a>
                        <span class="titleG">Institucional</span>
                    </div>
                </div>

                <!-- Inicio do segundo Card, o da Secretária-->
                <div class="card">
                    
                    <div class="content">

                            <a href="#">
                            <img src="../../images/secretaria.svg" class="img">
                            </a>
                            <span class="titleG">Secretária</span>
                        
                    </div>
                </div>

                <!-- Inicio do terceiro Card, o do Professor-->
                <div class="card" >
                    <div class="content">

                        <a href="#">
                        <img src="../../images/professor.svg" class="img">
                        </a>
                        <span class="titleG">Professor</span>

                    </div>
                </div>

                    <!-- Inicio do Quarto card, o do Aluno -->
                <div class="card">
                    <div class="content">

                        <a href="#">
                        <img src="../../images/aluno.svg" class="img">
                        </a>
                        <span class="titleG">Aluno</span>

                    </div>
                </div>
                
            </div>
            <div class="container">
                    <h6 class="fina">Fale conosco</h6>
                </div>
        </div>
    </div>
</body>
</html>