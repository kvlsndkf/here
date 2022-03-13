<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../images/favicon.png" type="image/x-icon">
    <title>HERE!</title>

    <link href="./login.page.css" rel="stylesheet">
    <link href="../../styles/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="back-login">
    <!-- Navbar Voltar -->
    <nav class="navbarlogin">

        <!-- Classe container para que o container do site seja igual em todas a páginas -->
        <div class="container">
            <a class="botaonavvoltar" href="../landing-page-here/landing-page-here.page.php">
                <img src="../../images/botaovoltar.svg" alt="">
            </a>
        </div>
    </nav>

    <div class="d-flex align-items-center  justify-content-center flex-column">
        <div class="logo-escrita-login">
            <img src="../../images/logo-escrita-login.svg" class="logo" alt="Logo HERE!">
        </div>

        <p class="entrar mb-0 text-center">
            Entrar no <span class="here-align-login">Here!</span>
        </p>

        <!-- titulo 3-->
        <p class="recomendamos mb-0 px-3">
            Recomendamos usar o endereço de e-mail que você recebeu da sua instituição de ensino.
        </p>

        <!-- Formulário -->
        <section class="px-3">
            <form>
                <!-- Input do Email -->
                <div>
                    <label>Email</label>
                    <input type="email" class="input" placeholder="nome@institucional.mail.com" name="email" required>
                </div>

                <!-- Input da Senha -->
                <div>
                    <label>Senha</label>
                    <input type="password" class="input" placeholder="**********" name="senha" required>
                </div>

                <!-- button entrar -->
                <a href=""><button>Entrar</button></a>

            </form>
        </section>

        <!-- Fale Conosco -->
        <div class="faleConosco d-flex justify-content-center width-100">
            Fale conosco
        </div>
    </div>

    <!--Js bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>