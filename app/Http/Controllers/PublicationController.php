<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\publication;

class PublicationController extends Controller
{
    public function index()
    {   
        $pubs = new publication();
        $pubs = $pubs->pub_of_all();
        
        return view ('frontend/publication',['publications'=>$pubs]);
    }
}
