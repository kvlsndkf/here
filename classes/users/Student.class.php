<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');

class Student
{
    //atributos
    public int $idStudent;
    public string $nameStudent;
    public string $emailStudent;
    public string $passwordStudent;

    public $group;
    public int $idGroup;

    public $team;
    public int $idTeam;

    //getters e setters
    public function getIdStudent(): int
    {
        return $this->idstudent;
    }
    public function setIdStudent($idstudent): void
    {
        $this->idstudent = $idstudent;
    }
    //---------------------------------------------
    public function getNameStudent(): string
    {
        return $this->nameStudent;
    }
    public function setNameStudent($nameStudent): void
    {
        $this->nameStudent = $nameStudent;
    }
    //---------------------------------------------
    public function getEmailStudent(): string
    {
        return $this->emailStudent;
    }
    public function setEmailStudent($emailStudent): void
    {
        $this->emailStudent = $emailStudent;
    }
    //---------------------------------------------
    public function getPasswordStudent(): string
    {
        return $this->passwordStudent;
    }
    public function setPasswordStudent($passwordStudent): void
    {
        $this->passwordStudent = $passwordStudent;
    }
    //---------------------------------------------
    public function getGroup()
    {
        return $this->group;
    }
    public function setGroup($group): void
    {
        $this->group = $group;
    }
    //---------------------------------------------
    public function getIdGroup(): int
    {
        return $this->idGroup;
    }
    public function setIdGroup($idGroup): void
    {
        $this->idGroup = $idGroup;
    }
    //---------------------------------------------
    public function getTeam()
    {
        return $this->team;
    }
    public function setTeam($team): void
    {
        $this->team = $team;
    }
    //---------------------------------------------
    public function getIdTeam(): int
    {
        return $this->idTeam;
    }
    public function setIdTeam($idTeam): void
    {
        $this->idTeam = $idTeam;
    }
    //---------------------------------------------
    //metodos
    //metodo para registrar o estudante
    public function register($student)
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("INSERT INTO student(nameStudent, emailStudent, passwordStudent, idGroup, idTeam)
                                        VALUES (?, ?, ?, ?, ?)");
            $stmt->bindValue(1, $student->getNameStudent());
            $stmt->bindValue(2, $student->getEmailStudent());
            $stmt->bindValue(3, $student->getPasswordStudent());
            $stmt->bindValue(4, $student->group->getIdGroup());
            $stmt->bindValue(5, $student->team->getIdTeam());

            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //---------------------------------------------
    //metodo para listar os alunos
    public function list()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT s.idStudent, s.nameStudent, s.emailStudent, g.nameGroup, t.nameTeam 
                                          FROM student s
                                          INNER JOIN groups g
                                          ON s.idGroup = g.idGroup
                                          INNER JOIN teams t
                                          ON s.idTeam = t.idTeam
                                          ORDER BY s.nameStudent
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //----------------------------------------------
    //método para contar cursos
    public function countStudent()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT COUNT(idStudent) 
                                            AS Quantidade
                                            FROM student
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}