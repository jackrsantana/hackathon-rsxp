<?php

namespace App\Http\Controllers;
use App\Models\Problem;

class ProblemController extends Controller {
  use \App\Http\Controllers\ApiControllerTrait;
  protected $model;
  protected $with;

  public function __construct (Problem $model) {
    $this->model = $model;
  }
}
