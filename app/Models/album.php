<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = 'albums';
    public $timestamps= false;
    protected $fillable = [
        'path','comment','visible'
    ];

    public function album_of_index()
    {   
        $albums = $this::where('visible', '1')->get();

        return $albums;
    }

    public function album_all()
    {   
        $albums = $this::all();

        return $albums;
    }
}
