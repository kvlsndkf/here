<?php

include_once('/xampp/htdocs' . '/here/database/connection.php');
class Course
{
    //atributos
    public int $idCourse;
    public string $name;
    public string $isAnnualDurationDate;
    public int $idSchool;

    //getters e setters
    public function getIdCourse(): string
    {
        return $this->idCourse;
    }
    public function setIdCourse($idCourse): void
    {
        $this->idCourse = $idCourse;
    }
    //---------------------------------------------
    public function getNameCourse(): string
    {
        return $this->nameCourse;
    }
    public function setNameCourse($nameCourse): void
    {
        $this->nameCourse = $nameCourse;
    }
    //---------------------------------------------
    public function getIsAnnualDurationDate(): string
    {
        return $this->isAnnualDurationDate;
    }
    public function setIsAnnualDurationDate($isAnnualDurationDate): void
    {
        if ($isAnnualDurationDate == true) {
            $isAnnualDurationDate = "Sim";
        } else {
            $isAnnualDurationDate = "Não";
        }

        $this->isAnnualDurationDate = $isAnnualDurationDate;
    }
    //---------------------------------------------
    public function getIdSchool(): string
    {
        return $this->idSchool;
    }
    public function setIdSchool($idSchool): void
    {
        $this->idSchool = $idSchool;
    }
    //---------------------------------------------

    //métodos
    //método para registrar o curso individualmente
    public function register($course)
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("INSERT INTO courses(nameCourse, isAnnualDurationDate)
                                        VALUES (?, ?)");
            $stmt->bindValue(1, $course->getNameCourse());
            $stmt->bindValue(2, $course->getIsAnnualDurationDate());

            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //---------------------------------------------
    //método para listar os cursos
    public function list()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT idCourse, nameCourse, isAnnualDurationDate 
                                            FROM courses
                                            ORDER BY nameCourse
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    //---------------------------------------------
    //método para listar os cursos no select do cadastro da turma
    public function selectList()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT * FROM courses
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
