<?php
//session_start();
include_once 'inc/Database.php'; // класс для работы с базой
require 'model/Category.php'; // подключаем нужные модели
require 'model/News.php';
require 'model/Comments.php';
require 'model/Register.php';


include_once 'view/News.php';
include_once 'view/Comments.php';
include_once 'controller/Controller.php'; // контроллер
include_once 'route/routing.php'; // маршрутизатор

echo $response;