<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'tags', 'article', 'file', 'confirm',];

     //Relationship to user
 public function user() {
    return $this->belongsTo(User::class, 'user_id');
 }
}
