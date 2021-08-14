<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Plan extends Model
{
    use HasFactory;
    
    
    protected $table = 'plans';
    
    protected $fillable = [
        'plan_content',
        'plan_start_time',
        'plan_times',
        'refrection_start_time',
        'refrection_times',
        'refrection_content',
        'selected_date',
        'status',
    ];
    
    
    
    public function goal()
    {
    return $this->belongsTo(Goal::class);
    }
  public function user()
    {
    return $this->belongsTo(User::class);
    }
}



