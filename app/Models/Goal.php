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
    return $this->belongsTo(User::class);
    }
    public function plans()
  {
    return $this->hasMany(Plan::class,'goal_id','id');
  }
    
}







  