<?php
include "library.php";
include "DataBase/start.php";
//2.Выполнить запрос
$db = new QueryBuilders($pdo);
$users = $db->getAll('users');
//4.Вывести чрез foreach
include "view.php";

