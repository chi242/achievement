<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DiaryController;

class Review extends Model
{
    use HasFactory;
    
    protected $table = 'diaries';
    
    protected $fillable = [
    'review',
    'id',
    ];

}