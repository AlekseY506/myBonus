<?php
include "library.php";
$db = include "DataBase/start.php";
$db->create("users", [
    "email" => "administrator",
    "name"  => "Rekm"
]);
$users = $db->getAll('users');
//4.Вывести чрез foreach
include "view.php";

