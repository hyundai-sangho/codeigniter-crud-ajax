<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Student;

class AddDataController extends BaseController
{
  public function index()
  {
    return view('crud-ajax/index.php');
  }

  public function store()
  {
    $students = new Student();

    $data = [
      'name' => $this->request->getVar('name'),
      'age' => $this->request->getVar('age'),
      'country' => $this->request->getVar('country'),
    ];

    $result = $students->save($data);

    if ($result) {
      echo 1;
    } else {
      echo 0;
    }
  }
}