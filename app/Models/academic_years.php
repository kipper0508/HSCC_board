<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academic_years extends Model
{
    protected $table = 'academic_years';
    public $timestamps= false;
    protected $fillable = [
        'year','visible'
    ];

    public function years_all()
    {   
        $years = $this::all();

        return $years;
    }

    public function years_of_index()
    {   
        $years = $this::where('visible', '1')->get();

        return $years;
    }
}
