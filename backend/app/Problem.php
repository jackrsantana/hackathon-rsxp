<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Problem extends Model {
  protected $table = 'problems';
  protected $fillable = [
    'id',
    'user_id',
    'category_id',
    'title',
    'description',
    'resolved',
  ];
  public $timestamps = false;
  protected $casts = [
    'user_id' => 'integer',
    'category_id' => 'integer',
    'resolved' => 'boolean',
  ];

  public function category () {
    return $this->belongsTo(Category::class);
  }

  public function user () {
    return $this->belongsTo(Category::class);
  }
}
