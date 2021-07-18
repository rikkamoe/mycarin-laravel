@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <h3 class="mb-3"><b>Produk Mobil MyCarin</b></h3>
        <hr />
        <form action="{{ url('product/search') }}" method="GET">
            <div class="row mb-3 mt-1">
                <div class="col-md-2 mt-3"><h5>Filter Mobil MyCarin</h5></div>
                <div class="col-md-2">
                    <label for="exampleFormControlInput1" class="form-label"><b>Dari Harga</b></label>
                    <select id="exampleFormControlInput1" class="form-select" name="price_from" aria-label="Default select example">
                        <option value="100000">Rp. 100.000</option>
                        <option value="200000">Rp. 200.000</option>
                        <option value="300000">Rp. 300.000</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="exampleFormControlInput1" class="form-label"><b>Sampai Harga</b></label>
                    <select id="exampleFormControlInput1" class="form-select" name="price_to" aria-label="Default select example">
                        <option value="200000">Rp. 200.000</option>
                        <option value="300000">Rp. 300.000</option>
                        <option value="400000">Rp. 400.000</option>
                        <option value="500000">Rp. 500.000</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="exampleFormControlInput1" class="form-label"><b>Type Mobil</b></label><br />
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" value="Matic" name="type" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Matic
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="Manual" name="type" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Manual
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" name="name" placeholder="Cari Mobil" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fa fa-search"></i> Cari</button>
                    </div>
                </div>
            </div>
        </form>
        <hr />
        @foreach ($cars as $car)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ url('img_uploads') }}/{{ $car->img_car }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title">{{ $car->name_car }}</h5>
                        </div>
                        <div class="col">
                            <h5 class="float-right"><b>Rp. {{ number_format($car->price_car) }}</b></h5>
                        </div>
                    </div>
                <p class="card-text">Type : {{ $car->type_car }}</p>
                <a href="{{ url('detail') }}/{{ $car->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Rental Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach
        <hr />
        {{ $cars->links() }}
    </div>
</div>
@endsection
