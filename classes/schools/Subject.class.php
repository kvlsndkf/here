<?php

class Subject
{
    //atributos
    public int $idSubject;
    public string $nameSubject;

    public $team;
    public int $idTeam;

    public int $idProfessor;
    public array $professor;

    //getters and setters
    public function getIdSubject(): int
    {
        return $this->idSubject;
    }
    public function setIdSubject($idSubject): void
    {
        $this->idSubject = $idSubject;
    }
    //----------------------------------------------
    public function getNameSubject(): string
    {
        return $this->nameSubject;
    }
    public function setNameSubject($nameSubject): void
    {
        $this->nameSubject = $nameSubject;
    }
    //----------------------------------------------
    public function getTeam(): string
    {
        return $this->team;
    }
    public function setTeam($team): void
    {
        $this->team = $team;
    }
    //----------------------------------------------
    public function getIdTeam(): int
    {
        return $this->idTeam;
    }
    public function setIdTeam($idTeam): void
    {
        $this->idTeam = $idTeam;
    }
    //----------------------------------------------
    public function getProfessor()
    {
        return $this->professor;
    }
    public function setProfessor($professor)
    {
        $this->professor = $professor;
    }
    //----------------------------------------------
    public function getIdProfessor()
    {
        return $this->idProfessor;
    }
    public function setIdProfessor($idProfessor): void
    {
        $this->idProfessor = $idProfessor;
    }
    //----------------------------------------------
    //métodos
    //método para cadastrar matérias
    public function register($subject)
    {
        $connection = Connection::connection();
        $connection->beginTransaction();

        try {
            $stmt = $connection->prepare("INSERT INTO subjects(nameSubject, idTeam)
                                        VALUES (?, ?)");
            $stmt->bindValue(1, $subject->getNameSubject());
            $stmt->bindValue(2, $subject->team->getIdTeam());

            $stmt->execute();
            $idSubject = $connection->lastInsertId();
            $this->setIdSubject($idSubject);
            $connection->commit();
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        try {
            $professor = $this->getProfessor();
            $idSubject = $this->getIdSubject();
            for ($i = 0; $i < count($professor); $i++) {


                if (!empty($idSubject)) {
                    $stmt = $connection->prepare("INSERT INTO subjectsHasProfessors(idProfessor, idSubject)
                                                VALUES (?, ?)
                                                ");

                    $stmt->bindValue(1, $professor[$i]);
                    $stmt->bindValue(2, $idSubject);

                    $stmt->execute();
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //----------------------------------------------
    //método para listar matérias
    public function list()
    {
        $connection = Connection::connection();

        try {
            $subjectArray = [];

            $stmt = $connection->prepare("SELECT s.idSubject, s.nameSubject, t.nameTeam 
                                            FROM subjects s
                                            INNER JOIN teams t
                                            ON s.idTeam = t.idTeam
                                            ORDER BY s.nameSubject
                                        ");
            $stmt->execute();


            $subjectColumns = $stmt->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < count($subjectColumns); $i++) {
                $row = $subjectColumns[$i];

                $stmtProfessors = $connection->prepare("SELECT p.idProfessor, p.nameProfessor 
                                                        FROM professors p
                                                        INNER JOIN subjectsHasProfessors sp
                                                        ON p.idProfessor = sp.idProfessor
                                                        AND " . $row['idSubject'] . " = sp.idSubject
                                                ");
                $stmtProfessors->execute();
                $subject = new Subject();
                $subject->professor = $stmtProfessors->fetchAll(PDO::FETCH_ASSOC);
                $subject->team = $row['nameTeam'];
                $subject->idSubject = $row['idSubject'];
                $subject->nameSubject = $row['nameSubject'];
                array_push($subjectArray, $subject);
            }
            return $subjectArray;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //----------------------------------------------
    //método para contar matérias
    public function countSubject()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT COUNT(idSubject) 
                                            AS Quantidade 
                                            FROM subjects
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //----------------------------------------------
    //método para contar matérias



}
