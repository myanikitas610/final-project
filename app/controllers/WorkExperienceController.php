<?php

namespace app\controllers;

use app\models\Experience; 

class WorkExperienceController 
{
    public function getExperience() {
        $ExpierenceModel = new Experience();
        $expierence = $ExpierenceModel->getAllExperience(); 
        header("Content-Type: application/json");
        echo json_encode($expierence);
        exit();
    }    

}
