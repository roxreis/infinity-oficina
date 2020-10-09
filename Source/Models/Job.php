<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Job extends DataLayer
{
    public function __construct()
    {
        parent::__construct("jobs", ["job_name", "job_description", "job_need", "job_money"]);
    }
}