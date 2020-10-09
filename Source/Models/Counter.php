<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Counter extends DataLayer
{
    public function __construct()
    {
        parent::__construct("counters", []);
    }
}