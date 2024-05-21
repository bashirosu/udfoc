<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded=[];
   
    public function profile(){
        return $this->hasOne(StudentProfile::class);
    
        }


public function examsrecord(){
  return $this->hasMany(StudentExams::class);
                
        }

        
        protected $searchable =[

        ];


        
}

