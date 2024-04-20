<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Expierence;

class MainController extends Controller
{

    public function homepage()
    {
                include '../public/assets/views/main/homepage.php';
    }

    public function Experience()
    {
         include '../public/assets/views/main/homepage.php';
    }

    
    public function notFound()
    {
        echo("404 Not found");
    }


}