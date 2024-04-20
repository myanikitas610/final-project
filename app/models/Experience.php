<?php

namespace app\models;

use app\core\Database;

class Experience
{
    use Database;

    protected $table = 'work_experience';

    public function getAllExperience() {
        $query = "SELECT * FROM work_experience";
        return $this->query($query);
    }

}