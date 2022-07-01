<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    
    


    protected $table = 'Classrooms';
    public $timestamps = true;
    protected $fillable=['Name_Class','grade_id'];
    
    protected $guarded=[];



    public function Grades()
    {
        return $this->belongsTo('App\Models\Grade', 'grade_id');
    }
}
