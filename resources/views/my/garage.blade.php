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
                    <h3><i class="fa fa-car"> Garasi Saya</i></h3>
                    @if(!empty($garage))
                    <p align="right">Tanggal Sewa : {{ $garage->date_order }}</p>
                    <div class="row">
                        @foreach ($garage_details as $garage_detail)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ url('img_uploads') }}/{{ $garage_detail->car->img_car }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $garage_detail->car->name_car }}</h5>
                                    <p class="card-text"><strong>Lama Sewa:</strong> {{ $garage_detail->rent }} Hari</p>
                                    <p class="card-text"><strong>Harga Sewa / Hari:</strong> Rp. {{ number_format($garage_detail->car->price_car) }}</p>
                                    <p class="card-text"><strong>Total Harga:</strong> Rp. {{ number_format($garage_detail->total_price) }}</p>
                                    <p class="card-text"><strong>Status Mobil:</strong> @if ($garage_detail->status_order = 1) Masih Tahap Pembayaran @endif</p>
                                    <a href="{{ url('history/detail') }}/{{ $garage->id }}" class="btn btn-info btn-block"><i class="fa fa-eye"></i> Detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p align="center">Belum ada kendaraan di garasi anda</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    @media (max-width: 576px) {
        .card {
            width: 100%;
        }
    }
</style>
@endpush