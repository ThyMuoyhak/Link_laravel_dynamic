<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    // Define a static method to return employee data
    public static function getEmployees()
    {
        return [
            [
                'no' => 'E001',
                'name' => 'John Doe',
                'gender' => 'Male',
                'phone' => '123-456-7890',
                'email' => 'john.doe@example.com',
                'skills' => ['PHP', 'Laravel', 'MySQL']
            ],
            [
                'no' => 'E002',
                'name' => 'Jane Smith',
                'gender' => 'Female',
                'phone' => '987-654-3210',
                'email' => 'jane.smith@example.com',
                'skills' => ['JavaScript', 'React', 'Node.js']
            ],
            [
                'no' => 'E003',
                'name' => 'Mark Johnson',
                'gender' => 'Male',
                'phone' => '555-555-5555',
                'email' => 'mark.johnson@example.com',
                'skills' => ['HTML', 'CSS', 'JavaScript']
            ],
            [
                'no' => 'E004',
                'name' => 'Alice Brown',
                'gender' => 'Female',
                'phone' => '111-222-3333',
                'email' => 'alice.brown@example.com',
                'skills' => ['Python', 'Django', 'SQL']
            ],
            [
                'no' => 'E005',
                'name' => 'Bob White',
                'gender' => 'Male',
                'phone' => '444-555-6666',
                'email' => 'bob.white@example.com',
                'skills' => ['Java', 'Spring', 'MySQL']
            ],
            [
                'no' => 'E006',
                'name' => 'Emily Green',
                'gender' => 'Female',
                'phone' => '777-888-9999',
                'email' => 'emily.green@example.com',
                'skills' => ['Ruby', 'Rails', 'PostgreSQL']
            ],
            [
                'no' => 'E007',
                'name' => 'Chris Black',
                'gender' => 'Male',
                'phone' => '333-444-5555',
                'email' => 'chris.black@example.com',
                'skills' => ['C#', 'ASP.NET', 'SQL Server']
            ],
            [
                'no' => 'E008',
                'name' => 'Sophia Miller',
                'gender' => 'Female',
                'phone' => '666-777-8888',
                'email' => 'sophia.miller@example.com',
                'skills' => ['Swift', 'iOS Development', 'Xcode']
            ],
            [
                'no' => 'E009',
                'name' => 'David Wilson',
                'gender' => 'Male',
                'phone' => '999-000-1111',
                'email' => 'david.wilson@example.com',
                'skills' => ['Go', 'Docker', 'Kubernetes']
            ],
            [
                'no' => 'E010',
                'name' => 'Olivia Taylor',
                'gender' => 'Female',
                'phone' => '222-333-4444',
                'email' => 'olivia.taylor@example.com',
                'skills' => ['PHP', 'Laravel', 'Vue.js']
            ]
        ];
    }
}
