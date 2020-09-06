<?php

namespace App\Http\Controllers\api\films;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Film;

class FilmsController extends Controller
{
    public function index()
    {
        return Film::all();
    }


    public function show($id)
    {
        $films = Film::where('id',$id)->first();
        return $films;
    }
}
