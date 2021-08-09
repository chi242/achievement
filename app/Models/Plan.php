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
        'selected_at',
    ];
    
    public function goal()
    {
    return $this->belongsTo(Goal::class);
    }
    public function review()
  {
    return $this->hasOne(Review::class);
  }
  public function user()
    {
    return $this->belongsTo(User::class);
    }
}



