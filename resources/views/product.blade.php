@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-3">
        <h3 class="mb-3"><b>Produk Mobil MyCarin</b></h3>
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
    </div>
</div>
@endsection
