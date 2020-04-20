<?php


class connection
{
    public static function make()
    {
        return new PDO('mysql:host=localhost;dbname=poligon_1;charset=utf8;', 'root', '');
    }
}