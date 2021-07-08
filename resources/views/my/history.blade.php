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
                    <h3><i class="fa fa-history"> Riwayat Penyewaan Saya</i></h3>
                    @if(!empty($historys))
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Penyewaan</th>
                                    <th>Total Harga</th>
                                    <th>Status Mobil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($historys as $history)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td valign="middle"><h5>{{ $history->date_order }}</h5></td>
                                    <td valign="middle"><h5>Rp. {{ number_format($history->price_order) }}</h5></td>
                                    <td valign="middle">
                                        <h5>
                                        @if($history->status_order = 1)
                                        Dalam Pembayaran
                                        @else
                                        -
                                        @endif
                                        </h5>
                                    </td>
                                    <td valign="middle">
                                        <a href="{{ url('history/detail') }}/{{ $history->id }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p align="center">Belum ada history di penyewaan anda</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
