<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
require_once('/xampp/htdocs' . '/here/classes/schools/School.class.php');

class Professor
{
    public int $idProfessor;
    public string $namaProfessor;
    public string $emailProfessor;
    public string $passwordProfessor;

    public int $idSchool;
    public array $school;

    //getters e setters
    public function getIdProfessor()
    {
        return $this->idProfessor;
    }
    public function setIdProfessor($idProfessor)
    {
        $this->idProfessor = intval($idProfessor);
    }
    //----------------------------------------------
    public function getNameProfessor()
    {
        return $this->nameProfessor;
    }
    public function setNameProfessor($nameProfessor)
    {
        $this->nameProfessor = $nameProfessor;
    }
    //----------------------------------------------
    public function getEmailProfessor()
    {
        return $this->emailProfessor;
    }
    public function setEmailProfessor($emailProfessor)
    {
        $this->emailProfessor = $emailProfessor;
    }
    //----------------------------------------------
    public function getPasswordProfessor()
    {
        return $this->passwordProfessor;
    }
    public function setPasswordProfessor($passwordProfessor)
    {
        $this->passwordProfessor = $passwordProfessor;
    }
    //----------------------------------------------
    public function getIdSchool()
    {
        return $this->idSchool;
    }
    public function setIdSchool($idSchool)
    {
        $this->idSchool = $idSchool;
    }
    //----------------------------------------------
    public function getSchool()
    {
        return $this->school;
    }
    public function setSchool($school)
    {
        $this->school = $school;
    }

    //----------------------------------------------
    //métodos
    public function register($professor)
    {
        $connection = Connection::connection();
        $connection->beginTransaction();

        try {
            $stmt = $connection->prepare("INSERT INTO professors(nameProfessor, emailProfessor, passwordProfessor)
                                        VALUES (?, ?, ?)
                                        ");
            $stmt->bindValue(1, $professor->getNameProfessor());
            $stmt->bindValue(2, $professor->getEmailProfessor());
            $stmt->bindValue(3, $professor->getPasswordProfessor());

            $stmt->execute();
            $idProfessor = $connection->lastInsertId();
            $this->setIdProfessor($idProfessor);
            $connection->commit();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        try {
            $school = $this->getSchool();
            $idProfessor = $this->getIdProfessor();
            for ($i = 0; $i < count($school); $i++) {


                if (!empty($idProfessor)) {
                    $stmt = $connection->prepare("INSERT INTO professorsHasSchools(idProfessor, idSchool)
                                                VALUES (?, ?)
                                                ");

                    $stmt->bindValue(1, $idProfessor);
                    $stmt->bindValue(2, $school[$i]);

                    $stmt->execute();
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //----------------------------------------------
    /*
    public function listProfessors()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT DISTINCT p.nameProfessor, p.emailProfessor
                                            FROM professors p
                                            INNER JOIN professorsHasSchools pf
                                            ON p.idProfessor = pf.idProfessor
                                            INNER JOIN schools s
                                            ON pf.idSchool = s.idSchool
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    //where cod professor com as elscolas dele

    public function listSchoolsProfessors()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT s.nameSchool 
                                            FROM professorshasschools pf
                                            JOIN professors p
                                            ON p.idProfessor = pf.idProfessor
                                            JOIN schools s
                                            ON s.idSchool = pf.idSchool
                                        ");
            $stmt->execute();
            $stmt->fetch();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        } 
    }*/

    public function list()
    {
        $connection = Connection::connection();

        //*Pagina atual
        $current_page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
        $page = (!empty($current_page)) ? $current_page : 1;

         //* Setar a quantidade de registros por pagina
         $limit_results = 10;

         //* Calcular o inicio da vizualização
         $start = ($limit_results * $page) - $limit_results;

        try {
            $stmt = $connection->prepare("SELECT nameProfessor, emailProfessor 
                                            FROM professors
                                            ORDER BY nameProfessor
                                            LIMIT $start,$limit_results
                                        ");
            $stmt->execute();
            $stmt->fetch();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        } 
    }
    //----------------------------------------------
    //método para listar os professores,  na tela de cadastro de matérias
    public function selectListProfessors()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT * FROM professors");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}