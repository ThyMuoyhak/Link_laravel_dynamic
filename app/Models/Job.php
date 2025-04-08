<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['position', 'salary'];

    /**
     * Get a list of jobs (static method for demonstration purposes).
     *
     * @return array
     */
    public static function getJobs()
    {
        return [
            ['id' => 1, 'position' => 'Manager', 'salary' => '$1,200'],
            ['id' => 2, 'position' => 'Software Engineer', 'salary' => '$2,500'],
            ['id' => 3, 'position' => 'Data Analyst', 'salary' => '$2,000'],
            ['id' => 4, 'position' => 'Marketing Specialist', 'salary' => '$1,800'],
            ['id' => 5, 'position' => 'Sales Executive', 'salary' => '$1,500'],
            ['id' => 6, 'position' => 'HR Officer', 'salary' => '$1,400'],
            ['id' => 7, 'position' => 'Graphic Designer', 'salary' => '$1,600'],
            ['id' => 8, 'position' => 'Customer Support', 'salary' => '$1,200'],
            ['id' => 9, 'position' => 'IT Support', 'salary' => '$1,300'],
            ['id' => 10, 'position' => 'Accountant', 'salary' => '$1,700'],
        ];
    }
}
