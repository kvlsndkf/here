<?php
include_once ('/xampp/htdocs' . '/here/database/connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro ETEC | HERE!</title>
</head>
<body>
    <form action="../controller/update-school-controller.php" name="forms-update-school-page" method="post" enctype="multipart/form-data">
        <label>Editar nome da ETEC</label>
        <br/>
        <br/>
        <label>Nome ETEC</label>
        <br/>
        <input type="hidden" name="id"  value="<?php echo @$_GET['idSchool'];?>" />
        <input type="text" name="name"  value="<?php echo @$_GET['nameSchool'];?>" />
        <br/>

        <br/>
        <input type="submit" value="Editar">
    </form>
</body>
</html>