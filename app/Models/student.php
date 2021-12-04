<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\academic_years;

class student extends Model
{
    protected $table = 'students';
    public $timestamps= false;
    protected $fillable = [
        'name','photo','comment','facebook','instagram','github','student_grade'
    ];

    public function student_of_index()
    {   
        $years = new academic_years();
        $years = $years->years_of_index();

        $students = array();
        foreach($years as $year){
            $students_one_year = $this::where('student_grade', $year->year)->get();
            $students[] = $students_one_year;
        }
        return $students;
    }

    public function student_all()
    {   
        $students = $this::all();
        
        return $students;
    }
}
