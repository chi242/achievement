<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Date extends Model
{
    use HasFactory;
    
    protected $table = 'dates';
    
    protected $fillable = [
        'selected_at',
    ];
    
    protected $primaryKey = 'selected_at';
    
    public function plans()
    {
    return $this->hasMany(Plan::class);
    }
    public function executions()
  {
    return $this->hasMany(Execution::class);
  }
  public function users()
    {
    return $this->hasMany(User::class);
    }
}

