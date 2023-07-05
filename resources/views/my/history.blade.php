@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row mb-3">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="card-title"><i class="fa fa-history"></i> Riwayat Penyewaan Saya</h3>
                    @if(!empty($historys))
                    <div class="table-responsive">
                        <table class="table table-hover table-striped mt-3">
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
                                    <td>{{ $history->date_order }}</td>
                                    <td>Rp. {{ number_format($history->price_order) }}</td>
                                    <td>
                                        @if($history->status_order == 1)
                                        Dalam Pembayaran
                                        @else
                                        -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ url('history/detail') }}/{{ $history->id }}" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p class="text-center">Belum ada history di penyewaan anda</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection