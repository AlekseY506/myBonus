<?php
namespace App\controllers;

use League\Plates\Engine;

class loginController
{
    public function index($vars)
    {
        $template = new Engine('../app/views');

        echo $template->render('index', ['name' => 'Артемий']);
    }
}