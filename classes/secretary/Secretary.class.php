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

        try {
            $stmt = $connection->prepare("SELECT y.idSecretary, y.nameSecretary, s.nameSchool 
                                          FROM secretarys y
                                          RIGHT JOIN schools s
                                          ON s.idSchool = y.idSchool
                                          ORDER BY s.nameSchool
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

        try {
            $stmt = $connection->prepare("SELECT y.nameSecretary, y.emailSecretary, y.passwordSecretary, s.nameSchool
                                            FROM secretarys y, schools s
                                            WHERE y.idSchool = s.idSchool
                                            ORDER BY y.nameSecretary
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