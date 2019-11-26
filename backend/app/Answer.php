<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Answer extends Model {
  protected $table = 'answers';
  protected $fillable = [
    'id',
    'problem_id',
    'user_id',
    'description',
  ];
  public $timestamps = false;
  protected $casts = [
    'user_id' => 'integer',
    'problem_id' => 'integer',
  ];

  public function problem () {
    return $this->belongsTo(Problem::class);
  }

  public function user () {
    return $this->belongsTo(User::class);
  }
}
