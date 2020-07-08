<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Specie;

class ActionController extends Controller
{
    public function addnewanimalbdd(Request $request) {
        Animal::add($request);
        return redirect('/list');
    }

    public function updateanimalbdd(Request $request) {
        Animal::up($request);
        return redirect('/list');
    }

    public function deleteanimal(Request $request) {
        Animal::deleteOne($request);
        return redirect('/list');
    }





    public function addnewspeciesbdd(Request $request) {
        Specie::add($request);
        return redirect('/listspecies');
    }

    public function deletespecie(Request $request) {
        Specie::deleteOne($request);
        return redirect('/listspecies');
    }

    public function updatespeciebdd(Request $request) {
        Specie::up($request);
        return redirect('/listspecies');
    }

}
