<?php
namespace App\Http\Validators;
use Illuminate\Validation\Validator;

class FormValidator extends Validator
{
  public function ValidateForm($attribute, $value, $parameters){
      // 偶数であればおっけ
    // return $value % 2 == 0;

    }

}


