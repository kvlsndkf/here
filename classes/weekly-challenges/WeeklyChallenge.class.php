<?php

class WeeklyChallenge
{
    public string $title;
    public string $deadlineChallenge;
    public int $idUser;
    public int $totalXpPoints;
    public UserStatistic $userStatistic;
    public bool $isCompleted;
    public Emblem $emblem;
    public string $createdAt;
    public string $updatedAt;
    public int $idWeeklyChallenge;
}