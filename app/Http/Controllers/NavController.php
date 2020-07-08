<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Specie;

class NavController extends Controller
{
    public function home() {
        return view('home');
    }

    public function addnewanimal() {
        return view('addnewanimal');
    }

    public function updateanimal (Request $request) {
        $animal = Animal::getoneanimal($request);
        return view('updateanimal', ['animal' => $animal]);
    }

    public function list() {
        $animals = Animal::getAll();
        return view('list', ['animals' => $animals]);
    }




    public function listspecies() {
        $species = Specie::getAll();
        return view('listspecies', ['species' => $species]);
    }

    public function addnewspecies() {
        return view('addnewspecies');
    }

    public function updatespecie (Request $request) {
        $specie = Specie::getonespecie($request);
        return view('updatespecie', ['specie' => $specie]);
    }


}
