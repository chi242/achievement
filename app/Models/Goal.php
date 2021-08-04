<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controller\GoalController;


class Goal extends Model
{
    use HasFactory;
    
    protected $table = 'goals';
    
    protected $fillable = [
    'maingoal',
    'measurable',
    'actionable',
    'competent',
    'id',
    'user_id',
    ];
    
    public function user()
    {
    return $this->belongsTo('App\User');
    }
    
}


class Todo extends Model
{
  Public function todos()
  {
    return $this->hasMany('App\Todo');
  }
}

class Review extends Model
{
  Public function reviews()
  {
    return $this->hasMany('App\Review');
  }
}






  