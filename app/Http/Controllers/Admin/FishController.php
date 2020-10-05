<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Fish;

class FishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fishes = Fish::all();
        return view('admin.fishes')->with('fishes', $fishes);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AddFish');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Fish $fish)
    {
        //dd($request->toArray());
        //$fish = new Fish();
        $fish->title = $request->input('title');
        $fish->instock = $request->input('stock');
        $fish->price = $request->input('price');
        $fish->quantity = $request->input('quantity');

        $fish->save();


        Session::flash('statuscode', 'success');
        return redirect('dashboard/fishes')->with('status', 'Fish has been Added');
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
        $fishes = Fish::findorFail($id);
        return view('admin.EditFish')->with('fishes', $fishes);
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
        //dd($request->toArray());
        $fish = Fish::find($id);
      //  dd($fishes->toArray());
        $fish->title = $request->input('title');
        $fish->instock = $request->input('stock');
        $fish->price = $request->input('price');
        $fish->quantity = $request->input('quantity');

        $fish->update();

        //Session::flash('statuscode', 'success');
        return redirect('dashboard/fishes')->with('status', 'Fish has been Updated');

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
