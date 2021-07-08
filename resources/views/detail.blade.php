@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ url('/') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
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
                                        <td colspan="3" align="right">
                                            <a href="{{ route('login') }}" class="btn btn-danger"><i class="fa fa-sign-in-alt"></i> Login Terlebih Dahulu</a>
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
