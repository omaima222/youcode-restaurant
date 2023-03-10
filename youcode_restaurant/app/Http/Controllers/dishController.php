<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dish;
use App\Http\Requests\dishFormRequest;

class dishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', [
            'dish' => dish::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDish');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(dishFormRequest $request)
    {
         $data = $request->validated();

         $dish = new dish();
         $dish->name = $data['name'];
         $dish->description = $data['description'];
         $dish->image = $_FILES['image']['name'];
         $dish->price = $data['price'];
         $dish->save();
         move_uploaded_file($_FILES['image']['tmp_name'], 'dishes imgs/' .$_FILES['image']['name'] );

         return redirect()->route('Dashboard.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('editDish', [
            'dish'=> dish::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(dishFormRequest $request, $id)
    {
         $data = $request->validated();

         $dish = dish::findOrFail($id);
         $dish->name = $data['name'];
         $dish->description = $data['description'];
         $dish->image = $_FILES['image']['name'];
         $dish->price = $data['price'];
         $dish->save();

         return redirect()->route('Dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = dish::findOrFail($id);
        $dish->delete();
        return redirect()->route('Dashboard.index');
    }
}
