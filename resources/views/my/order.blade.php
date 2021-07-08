@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ url('home') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('img_uploads') }}/{{ $car->img_car }}" width="700px" class="img-fluid rounded mx-auto d-block" alt="...">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $car->name_car }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width='30%'>Harga / Hari</td>
                                        <td width='5%'>:</td>
                                        <td width='65%'>Rp. {{ number_format($car->price_car) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tipe Mobil</td>
                                        <td>:</td>
                                        <td>{{ $car->type_car }}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi Mobil</td>
                                        <td>:</td>
                                        <td>{{ $car->description_car }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sewa Harian</td>
                                        <td>:</td>
                                        <td>
                                            <form action="{{ url('order') }}/{{ $car->id }}" method="POST">
                                            @csrf
                                                <div class="input-group">
                                                    <input type="number" class="form-control" placeholder="Sewa Harian" name="rent" aria-describedby="basic-addon2" required>
                                                    <span class="input-group-text" id="basic-addon2"> / Hari</span>
                                                </div>
                                                <div class="input-group mt-3">
                                                    <button class="btn btn-success" type="submit"><i class="fa fa-car"></i> Masukkan ke Garasi</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
