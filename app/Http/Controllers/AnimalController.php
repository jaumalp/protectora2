<?php

namespace Protectora\Http\Controllers;

use Illuminate\Http\Request;
use Protectora\Animal;

class AnimalController extends Controller
{
    //
    public function index(){
        $animales = Animal::all();
        return view('home',compact('animales'));
    }

    public function view($id){
        $animal = Animal::find($id);
        return view('animalView', compact('animal'));
    }
}
