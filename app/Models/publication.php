<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publication extends Model
{
    protected $table = 'publications';
    public $timestamps= false;
    protected $fillable = [
        'content','year','month','visible'
    ];

    public function pub_of_index()
    {   
        $pubs = $this::where('visible', '1')->get();
        
        return $pubs;
    }

    public function pub_of_all()
    {   
        $pubs = $this::all();
        
        return $pubs;
    }
}
