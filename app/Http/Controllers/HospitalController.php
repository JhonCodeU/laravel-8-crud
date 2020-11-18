<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        return view('hospital.create', [
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        $hospital = new Hospital();

        $hospital->name = $request->name;
        $hospital->city = $request->city;
        $hospital->entity = $request->entity;
        $hospital->is_active = isset($request->is_active);

        $hospital->category_id = $category->id;
        //dd(isset($request->is_active));
        //dd($request->all());

        $hospital->save();
        return redirect('/categories/' .$category->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, Hospital $hospital)
    {
        //dd($hospital->id);
        //$idHospital = $hospital->id;

        return view('hospital.edit',compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital, Category $category)
    {
        dd(request()->all());

        $activeIsset = isset($request->active);

        $hospital->name = $request->name;
        $hospital->city = $request->city;
        $hospital->entity = $request->entity;
        $hospital->is_active = $activeIsset;

        $hospital->update();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Hospital $hospital)
    {
        Hospital::destroy($hospital->id);
        return back();
    }
}
