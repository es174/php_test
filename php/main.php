<?php

require 'vendor/autoload.php';
require 'Database.php';
require 'HandlerClass.php';

$db = new Database();
$userHandler = new HandlerClass();

$userHandler->setUserValues();
$userHandler->setArticleValues();

$userId = 1;

echo $userHandler->getUsers();
echo PHP_EOL;
echo $userHandler->getUserArticles($userId);

