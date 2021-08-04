<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TodoController;

class Review extends Model
{
    use HasFactory;
    
    protected $table = 'reviews';
    
    protected $fillable = [
    'review',
    'evaluation',
    'id',
    'user_id',
    ];

}

class User extends Model
{
    public function user()
    {
    return $this->belongsTo('App\User');
    }
}

class Todo extends Model
{
    public function todo()
    {
    return $this->belongsTo('App\Todo');
    }
}

class Goal extends Model
{
    public function goal()
    {
    return $this->belongsTo('App\Goal');
    }
}