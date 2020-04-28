<?php


class connection
{
    public static function make($config)
    {
        return new PDO("{$config['host']};dbname={$config['dbname']};charset={$config['charset']};",
            $config['user'],
            $config['password']);
    }
}