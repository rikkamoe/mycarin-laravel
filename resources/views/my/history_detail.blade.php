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
                    <h3><i class="fa fa-check-circle"></i> Konfirmasi Penyewaan Sukses</h3>
                    <hr>
                    <p>Terima kasih telah melakukan konfirmasi penyewaan mobil di MyCarin. Mobil anda sudah sukses dikonfirmasi.</p>
                    <p>Silahkan transfer biaya sewa ke rekening kantor kami:</p>
                    <p><strong>Bank BCA Rekening : 655292123</strong></p>
                    <p><strong>atas nama: MyCarin Company</strong></p>
                    <p>dengan nominal: <strong>Rp. {{ number_format($order->code_order + $order->price_order) }}</strong></p>
                    <a href="{{ url('payment') }}" class="btn btn-primary" style="background-color: green;">Transfer Sekarang</a>
                    <hr>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Detail Penyewaan Saya</h3>
                    <hr>
                    @if(!empty($order))
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar Mobil</th>
                                        <th>Nama Mobil</th>
                                        <th>Lama Sewa</th>
                                        <th>Harga Sewa / Hari</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($order_details as $order_detail)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="{{ url('img_uploads') }}/{{ $order_detail->car->img_car }}" width="200px" alt="..."/></td>
                                        <td>{{ $order_detail->car->name_car }}</td>
                                        <td>{{ $order_detail->rent }} Hari</td>
                                        <td>Rp. {{ number_format($order_detail->car->price_car) }}</td>
                                        <td>Rp. {{ number_format($order_detail->total_price) }}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga:</strong></td>
                                        <td><strong>Rp. {{ number_format($order->price_order) }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Kode Pajak:</strong></td>
                                        <td><strong>Rp. {{ number_format($order->code_order) }}</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga Keseluruhan:</strong></td>
                                    <td colspan="2"><h4>Rp. {{ number_format($order->code_order + $order->price_order) }}</h4></td>
                                </tr>
                            </tbody>
                        </table>
                    @else
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p align="center">Belum ada kendaraan di penyewaan anda</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
