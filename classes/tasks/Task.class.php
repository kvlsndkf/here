<?php

class Task
{
    public string $title;
    public bool $isGroupActivity;
    public int $amountStudents;
    public array $professorFileUrl;
    public string $deliveryDate;
    public bool $isCustomPostDate;
    public string $postDate;
    public string $postHour;
    public string $deadlineDate;
    public string $deadlineHour;
    public PriorityEnum $priority;
    public TaskStatusEnum $taskStatus;
    public array $studentsGroup;
    public array $studentFileUrl;
    public bool $isTaskDelivered;
    public bool $isTaskFinished;
    public array $teams;
    public string $createdAt;
    public string $updatedAt;
    public int $idTask;
}