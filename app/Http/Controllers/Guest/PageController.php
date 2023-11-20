<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();


        return view('home', compact('movies'));
    }

    public function movieDetail($id){
        $movie = Movie::find($id);

        return view('movieDetail', compact('movie'));
    }

    public function thrillers(){

        $movies = Movie::where('type', 'thriller')->get();
        return view('thrillers', compact('movies'));

    }

    public function scienceFictions(){

        $movies = Movie::where('type', 'sifi')->get();
        return view('scienceFictions', compact('movies'));
    }

    public function dramas(){
        $movies = Movie::where('type', 'drama')->get();

        return view('dramas', compact('movies'));
    }


    public function kids(){
        $movies = Movie::where('type', 'kids')->get();

        return view('kids', compact('movies'));
    }

}
