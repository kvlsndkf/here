<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./views/styles/style.login.page.css" rel="stylesheet">
    <link href="./views/styles/style.css" rel="stylesheet">

</head>

<body>
    <header class="back-login">
        <!-- titulo e Imagem 1 -->
        <div class="box">
            <img src="./views/images/logo.svg" class="logo" alt="Logo HERE!">
            <p class="logo-name">Here!</p>
        </div>

        <!-- titulo 2-->
        <div class="entrar">
            Entrar no<span> Here!</span>
        </div>

        <!-- titulo 3-->
        <div class="recomendamos">
            Recomendamos usar o endereço de e-mail que você recebeu da sua instituição de ensino.
        </div>

        <!-- Formulário -->
        <section>
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
                <a href=""><button class="btn btn-white btn-animate">Entrar</button></a>

            </form>
        </section>
        <!-- Fale Conosco -->
        <div class="faleConosco">
            Fale conosco
        </div>
    </header>
</body>

</html>