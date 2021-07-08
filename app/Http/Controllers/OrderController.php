<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Order;
use App\OrderDetail;
use App\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Carbon;

class OrderController extends Controller
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

    public function index($id)
    {
        $car = Car::where('id', $id)->first();
        return view('my.order', compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = Order::where('id_user', FacadesAuth::user()->id)->where('status_order', 0)->first();

        //Check order
        if(!empty($order))
        {
            $order_details = OrderDetail::where('id_order', $order->id)->get();
        }

        return view('my.rent', compact('order', 'order_details'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //Validation user
        $user = User::where('id', FacadesAuth::user()->id)->first();

        if(empty($user->address) && empty($user->telephone))
        {
            return redirect('profile')->with('toast_error', 'Gagal, Lengkapi identitas anda terlebih dahulu !');
        }

        $order = Order::where('id_user', FacadesAuth::user()->id)->where('status_order', 0)->first();
        $id_order = $order->id;
        $order->status_order = 1;
        $order->update();

        //Validation car
        $order_details = OrderDetail::where('id_order', $id_order)->get();
        foreach ($order_details as $order_detail)
        {
            $car = Car::where('id', $order_detail->id_car)->first();
            $car->status_car = 0;
            $car->update();
        }

        return redirect('rent')->with('toast_success', 'Berhasil, Mobil Masuk ke Garasi Anda !');
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
        $car = Car::where('id', $id)->first();
        $date = Carbon::now();

        //Validation order and Save to order database
        $validation_order = Order::where('id_user', FacadesAuth::user()->id)->where('status_order', 0)->first();

        if(empty($validation_order))
        {
            $order = new Order;
            $order->id_user = FacadesAuth::user()->id;
            $order->date_order = $date;
            $order->price_order = 0;
            $order->status_order = 0;
            $order->save();
        }

        //Check order and Save to order_detail database
        $order_new = Order::where('id_user', FacadesAuth::user()->id)->where('status_order', 0)->first();
        $check_order = OrderDetail::where('id_car', $car->id)->where('id_order', $order_new->id)->first();

        if(empty($check_order))
        {
            $orderdetail = new OrderDetail;
            $orderdetail->id_order = $order_new->id;
            $orderdetail->id_car = $car->id;
            $orderdetail->rent = $request->rent;
            $orderdetail->total_price = $car->price_car * $request->rent;
            $orderdetail->save();
        }
        else
        {
            $orderdetail = OrderDetail::where('id_car', $car->id)->where('id_order', $order_new->id)->first();

            $orderdetail->rent = $orderdetail->rent + $request->rent;

            //Update price
            $price_new = $car->price_car * $request->rent;

            $orderdetail->total_price = $orderdetail->total_price + $price_new;
            $orderdetail->update();
        }

        //Total price
        $order = Order::where('id_user', FacadesAuth::user()->id)->where('status_order', 0)->first();
        $order->price_order = $order->price_order + $car->price_car * $request->rent;
        $order->update();

        return redirect('rent')->with('toast_success', 'Berhasil, Mobil Masuk ke Penyewaan Anda !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_detail = OrderDetail::where('id', $id)->first();
        $order = Order::where('id', $order_detail->id_order)->first();
        $order->price_order = $order->price_order - $order_detail->total_price;
        $order->update();

        $order_detail->delete();

        //Check order
        $check_order = Order::where('id_user', FacadesAuth::user()->id)->where('price_order', 0)->first();
        if(!empty($check_order))
        {
           $check_order->delete();
           return redirect('rent')->with('toast_success', 'Berhasil, Mobil Keluar dari Penyewaan Anda !');
        }

        return redirect('rent')->with('toast_success', 'Berhasil, Mobil Keluar dari Penyewaan Anda !');
    }
}
