<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyParent extends Model
{
    use HasFactory;
    protected $table = 'my_parents';
    protected $guarded=[];
}
