<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');

class Group
{
    //atributos
    public int $idGroup;
    public string $nameGroup;

    //getters e setters
    public function getIdGroup(): int
    {
        return $this->idGroup;
    }
    public function setIdGroup($idGroup): void
    {
        $this->idGroup = $idGroup;
    }
    //---------------------------------------------
    public function getnameGroup(): string
    {
        return $this->nameGroup;
    }
    public function setnameGroup($nameGroup): void
    {
        $this->nameGroup = $nameGroup;
    }
    //---------------------------------------------
    //método
    //método para listar os grupos no cadastro de alunos
    public function selectList()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT * FROM groups
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
