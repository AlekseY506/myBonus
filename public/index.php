<?php
include "library.php";
$db = include "DataBase/start.php";
$users = $db->getAll('users');
//4.Вывести чрез foreach
include "view.php";

