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
    ];

}