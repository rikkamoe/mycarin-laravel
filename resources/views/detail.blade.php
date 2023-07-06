@extends('layouts.app')

@section('content')

<!-- flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ url('home') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-6 mb-4">
            <img src="{{ url('img_uploads') }}/{{ $car->img_car }}" class="img-fluid rounded mx-auto d-block" alt="{{ $car->name_car }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $car->name_car }}</h2>
            <a>Pemilik : <b>Artawan Rentcar</b></a>
            <table class="table">
                <tbody>
                    <tr>
                        <td width="30%">Harga / Hari</td>
                        <td width="70%"><strong>Rp. {{ number_format($car->price_car) }}</strong></td>
                    </tr>
                    <tr>
                        <td>Tipe Mobil</td>
                        <td>{{ $car->type_car }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Mobil</td>
                        <td>
                            <pre>{{ $car->description_car }}</pre>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="right">
                            <a href="{{ route('login') }}" class="btn btn-danger"><i class="fa fa-sign-in-alt"></i> Login Terlebih Dahulu</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection