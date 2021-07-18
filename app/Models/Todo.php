<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Todo extends Model
{
    use HasFactory;
    
    protected $table = 'todo';
    
    protected $fillable = [
    'todolist',
    'id',
    ];
    
     public static function getHoge() {
        $count = \DB::table('todolist')::count($totalNumbers);
    }

}


