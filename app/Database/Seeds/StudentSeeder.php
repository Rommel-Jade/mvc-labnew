<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'full_name' => 'Juan Dela Cruz',
                'course' => 'BS Information Technology'
            ],
            [
                'full_name' => 'Maria Santos',
                'course' => 'BS Computer Science'
            ],
            [
                'full_name' => 'Pedro Reyes',
                'course' => 'BS Information Systems'
            ]
        ];

        $this->db->table('students')->insertBatch($data);
    }
}