<?php

namespace app\models;

use app\core\DatabaseModel;

class WorkExperience 
{
    public string $job_title = '';
    public string $company_name = '';
    public string $start_date = '';
    public ?string $end_date = null; 
    public string $description = '';

    public function tableName(): string
    {
        return 'my_work_experience'; 
    }

    public function attributes(): array
    {
        return ['job_title', 'company_name', 'start_date', 'end_date', 'description'];
    }

    
}
