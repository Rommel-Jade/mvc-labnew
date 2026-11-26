<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Directory extends BaseController
{
    public function index()
    {
        $model = new StudentModel();

        $data['students'] = $model->findAll();

        return view('student_list', $data);
    }

    public function profile($id)
    {
        $model = new StudentModel();

        $data['student'] = $model->find($id);

        if (!$data['student']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('student_profile', $data);
    }
}