@extends('layouts.app')

@section('content')
<style>
  .car-main-section {
    background-color: #fff;
    padding: 1rem;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1rem;
  }

  .car-image {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .car-image img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 8px;
  }

  .car-description {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 1rem;
  }

  .car-description h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
  }

  .car-description h4 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }

  .car-description p {
    font-size: 1.2rem;
    line-height: 1.5;
  }

  .car-recommendations {
    margin-top: 3rem;
  }

  .car-recommendations h3 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
  }

  .car-recommendations .btn-custom {
    font-size: 1.2rem;
    padding: 0.5rem 1rem;
  }

  .car-card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 1.5rem;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .car-card img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 1rem;
  }

  .car-card-title {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
  }

  .car-card-price {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 1rem;
  }
</style>
<div class="container mt-5">
  <div class="car-main-section">
    <div class="car-image">
      <img src="{{ asset('img/mobil.jpg') }}" alt="Car Image" />
    </div>
    <div class="car-description">
      <h1 style="color: #00afef"><strong>MyCarin</strong></h1>
      <h4>Temukan Harga Terbaik dan Rekomendasi Kendaraan dengan Mudah.</h4>
      <p>Segera Bergabung dan Temukan Kemudahan Rental Mobil Setir Sendiri atau Gunakan Supir, Semua dalam Satu Aplikasi yang Terpercaya. Jelajahi Dunia Rental Mobil yang Praktis dan Efisien bersama MyCarin!</p>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-10">
      <h3><b>Mobil Rekomendasi Hari Ini</b></h3>
    </div>
    <div class="col-md-2">
      <a href="{{ url('product') }}" class="btn btn-primary btn-block btn-custom">Lihat Lainnya</a>
    </div>
  </div>

  <hr />

  <div class="row">
    @foreach (\App\Car::inRandomOrder()->limit(3)->get() as $car)
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="{{ asset('img_uploads') }}/{{ $car->img_car }}" class="card-img-top" alt="Car Image">
        <div class="card-body">
          <h5 class="card-title mb-2">{{ $car->name_car }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Rp. {{ number_format($car->price_car) }}</h6>
          <p class="card-text mb-3">Type: {{ $car->type_car }}</p>
          <a href="{{ url('detail') }}/{{ $car->id }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Rental Sekarang</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

  <hr />
</div>
@endsection