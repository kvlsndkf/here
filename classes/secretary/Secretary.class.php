<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
require_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');

class Secretary
{
    //atributos
    public int $idSecretary;
    public string $nameSecretary;
    public string $emailSecretary;
    public string $passwordSecretary;
    public int $idSchool;

    public $school;

    //getters and setters
    public function getIdSecretary()
    {
        return $this->idSecretary;
    }

    public function setIdSecretary($idSecretary)
    {
        $this->idSecretary = $idSecretary;
    }

    public function getNameSecretary()
    {
        return $this->nameSecretary;
    }

    public function setNameSecretary($nameSecretary)
    {
        $this->nameSecretary = $nameSecretary;
    }

    public function getEmailSecretary()
    {
        return $this->emailSecretary;
    }

    public function setEmailSecretary($emailSecretary)
    {
        $this->emailSecretary = $emailSecretary;
    }

    public function getPasswordSecretary()
    {
        return $this->passwordSecretary;
    }

    public function setPasswordSecretary($passwordSecretary)
    {
        $this->passwordSecretary = $passwordSecretary;
    }

    public function getIdSchool()
    {
        return $this->idSchool;
    }

    public function setIdSchool($idSchool)
    {
        $this->idSchool = $idSchool;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function setSchool($school)
    {
        $this->school = $school;
    }

    //métodos
    public function register($secretary)
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("INSERT INTO secretarys(nameSecretary, emailSecretary, passwordSecretary, idSchool)
                                        VALUES (?, ?, ?, ?)");
            $stmt->bindValue(1, $secretary->getNameSecretary());
            $stmt->bindValue(2, $secretary->getEmailSecretary());
            $stmt->bindValue(3, $secretary->getPasswordSecretary());
            $stmt->bindValue(4, $secretary->school->getIdSchool());

            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function list()
    {
        $connection = Connection::connection();

        //*Receber o número da pagina
            //*Pagina atual
            $current_page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
            $page = (!empty($current_page)) ? $current_page : 1;

            //* Setar a quantidade de registros por pagina
            $limit_results = 10;

            //* Calcular o inicio da vizualização
            $start = ($limit_results * $page) - $limit_results;

        try {
            $stmt = $connection->prepare("SELECT y.idSecretary, y.nameSecretary, s.nameSchool 
                                          FROM secretarys y
                                          RIGHT JOIN schools s
                                          ON s.idSchool = y.idSchool
                                          ORDER BY s.nameSchool
                                          LIMIT $start, $limit_results
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function listSecretary()
    {
        $connection = Connection::connection();

        //*Receber o número da pagina
            //*Pagina atual
            $current_page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
            $page = (!empty($current_page)) ? $current_page : 1;

            //* Setar a quantidade de registros por pagina
            $limit_results = 10;

            //* Calcular o inicio da vizualização
            $start = ($limit_results * $page) - $limit_results;

        try {
            $stmt = $connection->prepare("SELECT y.nameSecretary, y.emailSecretary, y.passwordSecretary, s.nameSchool
                                            FROM secretarys y, schools s
                                            WHERE y.idSchool = s.idSchool
                                            ORDER BY y.nameSecretary
                                            LIMIT $start, $limit_results
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function countSecretary()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT COUNT(idSecretary) 
                                            AS Quantidade 
                                            FROM secretarys
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}