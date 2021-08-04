<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Todo extends Model
{
    use HasFactory;
    
    protected $table = 'todos';
    
    protected $fillable = [
    'todolist',
    'id',
    'user_id',
    ];
    
     public static function getHoge() {
        $count = \DB::table('todolist')::count($totalNumbers);
    }

}

class Review extends Model
{
  Public function review()
  {
    return $this->hasOne('App\Review');
  }
}

class User extends Model
{
    public function user()
    {
    return $this->belongsTo('App\User');
    }
}

class Goal extends Model
{
    public function goal()
    {
    return $this->belongsTo('App\Goal');
    }
}

