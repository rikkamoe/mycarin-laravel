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
                    <p>Terima kasih telah melakukan konfirmasi penyewaan mobil di MyCarin. Mobil Anda sudah berhasil dikonfirmasi.</p>
                    <p>Silakan transfer biaya sewa ke rekening kantor kami:</p>
                    <p><strong>Bank BCA Rekening: 655292123</strong></p>
                    <p><strong>Atas nama: MyCarin Company</strong></p>
                    <p>dengan nominal: <strong>Rp. {{ number_format($order->code_order + $order->price_order) }}</strong></p>
                    @if($order_details->isNotEmpty())
                    @php
                    $firstCar = $order_details[0]->car;
                    @endphp
                    <a href="https://api.whatsapp.com/send?phone=6281916111024&amp;text=Halo%21%0ASaya%20telah%20menyewa%20mobil%20dengan%20detail%20sebagai%20berikut%3A%0A%0ANama%20Mobil%3A%20{{ $firstCar->name_car }}%0AHarga%20Sewa%20per%20Hari%3A%20Rp.%20{{ number_format($firstCar->price_car) }}%0ALama%20Sewa%3A%20{{ $order_details[0]->rent }}%20Hari%0ATotal%20Harga%3A%20Rp.%20{{ number_format($order_details[0]->total_price) }}" class="btn btn-primary" style="background-color: green;">Hubungi WhatsApp</a>
                    @else
                    <p>Tidak ada mobil yang disewa</p>
                    @endif
                    <hr>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3><i class="fa fa-history"></i> Detail Penyewaan Saya</h3>
                    <hr>
                    @if($order_details->isNotEmpty())
                    <div class="row">
                        @php $no = 1; @endphp
                        @foreach ($order_details as $order_detail)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ url('img_uploads') }}/{{ $order_detail->car->img_car }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $order_detail->car->name_car }}</h5>
                                    <p class="card-text">Lama Sewa: {{ $order_detail->rent }} Hari</p>
                                    <p class="card-text">Harga Sewa per Hari: Rp. {{ number_format($order_detail->car->price_car) }}</p>
                                    <p class="card-text">Total Harga: Rp. {{ number_format($order_detail->total_price) }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Total Harga:</strong></td>
                                        <td>Rp. {{ number_format($order->price_order) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Pajak:</strong></td>
                                        <td>Rp. {{ number_format($order->code_order) }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Harga Keseluruhan:</strong></td>
                                        <td>Rp. {{ number_format($order->code_order + $order->price_order) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @else
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p align="center">Belum ada kendaraan dalam penyewaan Anda</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection