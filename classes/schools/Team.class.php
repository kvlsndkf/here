<?php

class Team
{
    //atributos
    public int $idTeam;
    public string $nameTeam;
    public string $startDateTeam;
    public string $moduleTeam;
    public int $idCourse;
    public $course;

    //getters e setters
    public function getIdTeam(): int
    {
        return $this->idTeam;
    }
    public function setIdTeam($idTeam): void
    {
        $this->idTeam = $idTeam;
    }
    //---------------------------------------------
    public function getNameTeam(): string
    {
        return $this->nameTeam;
    }
    public function setNameTeam($nameTeam): void
    {
        $this->nameTeam = $nameTeam;
    }
    //---------------------------------------------
    public function getStartDateTeam(): string
    {
        return $this->startDateTeam;
    }
    public function setStartDateTeam($startDateTeam): void
    {
        $this->startDateTeam = $startDateTeam;
    }
    //---------------------------------------------
    public function getModuleTeam(): string
    {
        return $this->moduleTeam;
    }
    public function setModuleTeam($moduleTeam): void
    {
        $this->moduleTeam = $moduleTeam;
    }
    //---------------------------------------------
    public function getIdCourse(): int
    {
        return $this->idCourse;
    }
    public function setIdCourse($idCourse): void
    {
        $this->idCourse = $idCourse;
    }
    //---------------------------------------------
    public function getCourse()
    {
        return $this->course;
    }
    public function setCourse($course)
    {
        $this->course = $course;
    }
    //---------------------------------------------

    //métodos
    //método para registrar a turma
    public function register($team)
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("INSERT INTO teams(nameTeam, startDateTeam, moduleTeam, idCourse)
                                        VALUES (?, ?, ?, ?)");
            $stmt->bindValue(1, $team->getNameTeam());
            $stmt->bindValue(2, $team->getStartDateTeam());
            $stmt->bindValue(3, $team->getModuleTeam());
            $stmt->bindValue(4, $team->course->getIdCourse());

            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //---------------------------------------------
    //método para listar as turmas na página de turmas
    public function list()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT t.idTeam, t.nameTeam, date_format(t.startDateTeam, '%d/%m/%Y'), t.ModuleTeam, c.nameCourse
                                          FROM teams t
                                          INNER JOIN courses c
                                          ON t.idCourse = c.idCourse 
                                          ORDER BY t.nameTeam
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //---------------------------------------------
    //método para listar as turmas no cadastro de alunos
    public function selectList()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT * FROM teams
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}