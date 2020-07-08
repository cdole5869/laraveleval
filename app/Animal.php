<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public static function getAll() {
        return Animal::all();
    }

    public static function getoneanimal($request) {
       $animal = Animal::find($request->id);
       return $animal;
    }

    public static function up($request) {
        $animal = Animal::find($request->id);
        $animal->specie_id = $request->specie_id;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->description = $request->description;
        $animal->sexe = $request->sexe;
        $animal->weight = $request->weight;
        $animal->save();
        return;
    }

    public static function add($request) {
        $animal = new Animal;
        $animal->specie_id = $request->specie_id;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->description = $request->description;
        $animal->sexe = $request->sexe;
        $animal->weight = $request->weight;
        $animal->save();
        return;
    }

    public static function deleteOne($request) {
        return Animal::destroy($request->id);
    }

    public function specie() {
        return $this->belongsTo('App\Specie');
    }
}
