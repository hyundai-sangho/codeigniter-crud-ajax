<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Student;

class UpdateDataController extends BaseController
{
  public function index()
  {
    $students = new Student();
    $id = $this->request->getVar('id');
    $results = $students->find($id);
    $output = '';

    $output .= "
      <div class='form-group'>
        <label for=''><b>이름 입력</b></label>
        <input type='hidden' value={$results['id']} name='id' id='id' class='form-control form-control-lg'>
        <input type='text' value={$results['name']} name='edit_name' id='edit_name' class='form-control form-control-lg'>
      </div>
      <div class='form-group'>
        <label for=''><b>나이 입력</b></label>
       <input type='number' value={$results['age']} name='edit_age' id='edit_age' class='form-control form-control-lg'>
      </div>
      <div class='form-group'>
       <label for=''><b>지역 입력</b></label>
       <input type='text' value={$results['country']} name='edit_country' id='edit_country' class='form-control form-control-lg'>
      </div>
      ";

    echo $output;
  }

  public function update()
  {
    $students = new Student();

    $data = [
      'id' => $this->request->getVar('id'),
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