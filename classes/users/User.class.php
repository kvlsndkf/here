<?php

class User
{
    public string $name;
    public string $email;
    public string $password;
    public UserTypeEnum $userType;
    public string $photoUrl;
    public string $chatLink;
    public UserStatistic $userStatistic;
    public string $createdAt;
    public string $updatedAt;
    public int $idUser;
}