<?php

class Chat
{
    public User $user;
    public User $userReceiver;
    public string $message;
    public string $createdAt;
    public string $updatedAt;
    public int $idChannel;
}