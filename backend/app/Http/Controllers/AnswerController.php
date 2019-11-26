<?php

namespace App\Http\Controllers;
use App\Models\Answer;

class AnswerController extends Controller {
  use \App\Http\Controllers\ApiControllerTrait;
  protected $model;
  protected $with;

  public function __construct (Answer $model) {
    $this->model = $model;
  }
}
