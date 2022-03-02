<?php

class Feedback
{
    public int $idTask;
    public string $description;
    public ScoreEnum $score;
    public int $idStudent;
    public string $createdAt;
    public string $updatedAt;
    public int $idFeedback;
}