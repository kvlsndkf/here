<?php
class Connection
{
    public static function connection()
    {

        $connection = new PDO(
            "mysql:host=localhost;
            dbname=database_here",
            "root",
            ""
        );

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("SET CHARACTER SET utf8");

        return $connection;
    }

    public static function connectionli(){

        $servidor = "localhost";
	    $usuario = "root";
	    $senha = "";
	    $dbname = "database_here";

        //Criar a conexão
	    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname) 
        or die("Erro na conexão com o servidor! Erro: " . mysqli_connect_error());

        return $conn;
    }
}