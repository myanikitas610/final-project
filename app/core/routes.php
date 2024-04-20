<?php

use app\controllers\UserController;
use app\controllers\MainController;
use app\controllers\WorkExperienceController;

$routes = [
    'homepage' => [
        'controller' => MainController::class,
        'GET' => 'homepage'
    ],
    'contact' => [
        'controller' => UserController::class,
        'GET' => 'contact',
        'POST' => 'saveUser'
    ],
    'get_experience' => [
        'controller' => WorkExperienceController::class,
        'GET' => 'getExperience'
    ]
];