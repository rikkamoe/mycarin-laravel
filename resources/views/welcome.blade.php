@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mb-5">
      <h1 class="mt-5">MyCarin</h1>
      <h4 class="mt-5">Setir Mobil sendiri atau menggunakan supir dengan satu aplikasi yang dilengkapi
        dengan rekomendasi kendaraan sesuai prediksi cuaca untuk kenyamanan anda.</h4>
    </div>
    <div class="col-md-6 mb-5">
      <img src="{{ url('img/hero-img.svg') }}" width="500px" class="rounded mx-auto d-block img-fluid" alt="..." />
    </div>
    <div class="row mt-3">
      <div class="col-md-10">
        <h3 class="mb-3"><b>Mobil Rekomendasi Cuaca Hari ini </b></h3>
      </div>
      <div class="col-md-2">
        <img src="https://img.icons8.com/color/50/000000/rain--v1.png" /> 18&#8451; Denpasar
      </div>
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
            <a href="{{ url('order') }}/{{ $car->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Rental Sekarang</a>
          </div>
        </div>
      </div>
      @endforeach
      <hr />
    </div>
  </div>
</div>
@endsection