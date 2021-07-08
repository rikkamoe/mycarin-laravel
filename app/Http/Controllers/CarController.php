<?php

namespace App\Http\Controllers;
use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
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
        $cars = Car::where('status_car', 1)->paginate(6);
        return view('my.car', compact('cars'));
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
        $price_from = $request->price_from;
        $price_to = $request->price_to;
        $type = $request->type;
        $name = $request->name;

        if(empty($name))
        {
            $cars = Car::where('status_car', 1)->paginate(6);
            return redirect('car')->with('toast_error', 'Gagal, Isi data filter lengkap terlebih dahulu !');
        }
        else
        {
            $cars = Car::where('name_car', 'LIKE', '%'.$name.'%')->where('type_car', $type)->whereBetween('price_car', [$price_from, $price_to])->paginate(6);
            return view('my.car', compact('cars'));
        }
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
        //
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
        //
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
