<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

    public function homepage()
    {
                include '../public/assets/views/main/homepage.php';
    }

    public function notFound()
    {
        
    }


}