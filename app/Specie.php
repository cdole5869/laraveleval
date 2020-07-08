<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    public static function getAll() {
        return Specie::all();
    }

    public static function add($request) {
        $specie = new Specie;
        $specie->name = $request->name;
        $specie->save();
        return;
    }

    public static function getonespecie($request) {
       $specie = Specie::find($request->id);
       return $specie;
    }

    public static function up($request) {
        $specie = Specie::find($request->id);
        $specie->name = $request->name;
        $specie->save();
        return;
    }

    public static function deleteOne($request) {
        return Specie::destroy($request->id);
    }
}
