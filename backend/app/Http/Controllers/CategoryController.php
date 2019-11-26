<?php

namespace App\Http\Controllers;
use App\Models\Category;

class CategoryController extends Controller {
  use \App\Http\Controllers\ApiControllerTrait;
  protected $model;
  protected $with;

  public function __construct (Category $model) {
    $this->model = $model;
  }
}
