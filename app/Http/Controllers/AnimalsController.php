<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals;

class AnimalsController extends Controller
{
    public function showAnimalsFromId($animal_id){
        $animal_id = trim($animal_id);
        $animal_model = new Animals();
        $animal = $animal_model->all()
                    ->where('animals_id', '=', $animal_id)
                    ->first();
        if (!$animal){
            abort(404);
        }else{
            return view('pages.animal', ['data'=>$animal]);
        }

    }
}
