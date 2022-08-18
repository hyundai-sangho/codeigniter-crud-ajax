<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Student;

class DeleteDataController extends BaseController
{
  public function index()
  {
    $students = new Student();
    $id = $this->request->getVar('id');
    $result = $students->delete($id);

    if ($result) {
      echo 1;
    } else {
      echo 0;
    }
  }
}
