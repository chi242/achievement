<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TodoController;

class Execution extends Model
{
    use HasFactory;
    
    protected $table = 'executions';
    
    protected $fillable = [
    'execution_start_time',
    'execution_times',
    'achievement_rate',
    'review_content',
    ];
public function user()
    {
    return $this->belongsTo('App\User');
    }
public function todo()
    {
    return $this->belongsTo('App\Todo');
    }
public function goal()
    {
    return $this->belongsTo('App\Goal');
    }
}
