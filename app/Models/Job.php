<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job
{
    public static function all(){
        return [['title' => 'Softwere', 'salary' => '1000$'],
                ['title' => 'Grafic Disigner', 'salary' => '2000$']];
    }
}
