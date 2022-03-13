<?php

include_once ('/xampp/htdocs' . '/here/database/connection.php');
class School
{
    //atributos
    public string $name;
    public array $courses;
    public int $idSecretary;
    public string $createdAt;
    public string $updatedAt;
    public int $idSchool;

    //getters e setters
    public function getNameSchool(): string
    {
        return $this->nameSchool;
    }

    public function setNameSchool($nameSchool): void
    {
        $this->nameSchool = $nameSchool;
    }

    public function getIdSchool(): string
    {
        return $this->idSchool;
    }

    public function setIdSchool($idSchool): void
    {
        $this->idSchool = $idSchool;
    }

    //métodos

    public function register($school)
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("INSERT INTO schools(nameSchool)
                                        VALUES (?)");
            $stmt->bindValue(1, $school->getNameSchool());
           

            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }





    public function tableRegisterSchool($table): void
    {
        $connection = Connection::connection();

        if (!empty($table)) {
            $file = new DOMDocument;
            $file->load($table);

            $rows = $file->getElementsByTagName("Row");

            $firstRow = true;

            foreach ($rows as $row) {
                if (!$firstRow) {
                    $file = $row->getElementsByTagName("Data")->item(0)->nodeValue;

                    try {
                        $stmt = $connection->prepare("INSERT INTO schools(nameSchool)
                                                    VALUES (?)");
                        $stmt->bindValue(1, $file->getNameSchool());
                        $stmt->execute();
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                }
                $firstRow = false;
            }
        }
    }

   
    public function list()
    {
        $connection = Connection::connection();

        try {
            //$stmt = $connection->prepare("SELECT * FROM schools ORDER BY nameSchool");
           // $stmt = $connection->prepare("SELECT s.nameSchool, y.nameSecretary FROM schools s
            //            INNER JOIN secretary y ON s.idSchool = y.idSchool
            //                ORDER BY s.nameSchool
            //        ");
            $stmt = $connection->prepare("SELECT s.idSchool, s.nameSchool, y.nameSecretary, y.idSchool 
                                            FROM schools s, secretary y
                                            WHERE s.idSchool = y.idSchool
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function selectList()
    {
        $connection = Connection::connection();

        try {
            $stmt = $connection->prepare("SELECT * FROM schools s
                                        WHERE s.idSchool NOT IN 
                                        (SELECT y.idSchool FROM secretary y)
                                        ");
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    
}
