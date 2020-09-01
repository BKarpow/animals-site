<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animals;
use Illuminate\Support\Facades\DB;

class AdminAnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = new Animals();
        $animals_list = DB::table('animals')->paginate(25);
        return view('admin.home', ['animals' => $animals_list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = (int)$id;
        $animal = Animals::find($id);
        if (!$animal){
            abort(404);
        }else{
            return view('admin.editAnimals', ['animal' => $animal]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animal = Animals::find((int)$id);
        $animal->name = $request->input('name');
        $animal->age = $request->input('age');
        $animal->photo = $request->input('photo');
        $animal->animal_species = $request->input('animal_species');
        $animal->animal_description = $request->input('animal_description');
        $animal->save();
        return redirect('/admin')->with('status', 'Змінено ' . $animal->animals_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
