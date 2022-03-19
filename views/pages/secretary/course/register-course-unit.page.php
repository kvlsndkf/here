<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro ETEC | HERE!</title>
</head>
<body>
    <form action="../controller/course-unit-registration.controller.php" name="course-unit-registration" method="post">
        <label>Cadastro unitário curso</label>
        <br/>
        <br/>
        <label>Nome curso</label>
        <br/>
        <input type="text" placeholder="Digite o nome do curso" name="name">
        <br/>
        <br/>
        <input type="checkbox" name="course-annual" value="Sim"> Curso com período anual 
        <br/>
        <br/>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>