<?php

namespace app\models;

use app\core\Database;

class Expierence
{
    use Database;

    protected $table = 'expierence';

    public function getAllExpierence() {
        $query = "SELECT * FROM my_work_expierence";
        return $this->query($query);
    }

}