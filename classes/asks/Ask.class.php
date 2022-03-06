<?php

class Ask
{
    public AskCategoryEnum $category;
    public Course $course;
    public Subject $subject;
    public string $description;
    public Module $module;
    public int $idStudent;
    public School $school;
    public string $createdAt;
    public string $updatedAt;
    public int $xpPoints;
    public array $answers;
    public bool $isAskShared;
    public int $idProfessor;
    public array $requestDetails;
    public int $idAsk;
}