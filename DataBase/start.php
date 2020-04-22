<?php
$config = include "DataBase/config.php";
include "DataBase/connection_class.php";
include "DataBase/QueryBuilders_class.php";
//1. Соедининие с БД
return new QueryBuilders(connection::make($config['database']));
