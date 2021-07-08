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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar Mobil</th>
                                    <th>Nama Mobil</th>
                                    <th>Lama Sewa</th>
                                    <th>Harga Sewa / Hari</th>
                                    <th>Total Harga</th>
                                    <th>Status Mobil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($garage_details as $garage_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ url('img_uploads') }}/{{ $garage_detail->car->img_car }}" width="200px" alt="..."/></td>
                                    <td valign="middle"><h5>{{ $garage_detail->car->name_car }}</h5></td>
                                    <td valign="middle"><h5>{{ $garage_detail->rent }} Hari</h5></td>
                                    <td valign="middle"><h5>Rp. {{ number_format($garage_detail->car->price_car) }}</h5></td>
                                    <td valign="middle"><h5>Rp. {{ number_format($garage_detail->total_price) }}</h5></td>
                                    <td valign="middle">
                                        @if ($garage_detail->status_order = 1)
                                        <h5>Masih Tahap Pembayaran</h5>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
