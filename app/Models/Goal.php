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
    ];
}
