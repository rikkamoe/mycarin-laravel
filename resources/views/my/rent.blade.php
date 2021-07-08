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
                    <h3><i class="fa fa-car"> Penyewaan Saya</i></h3>
                    @if(!empty($order))
                        <p align="right">Tanggal Sewa : {{ $order->date_order }}</p>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Gambar Mobil</th>
                                    <th>Nama Mobil</th>
                                    <th>Lama Sewa</th>
                                    <th>Harga Sewa / Hari</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($order_details as $order_detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><img src="{{ url('img_uploads') }}/{{ $order_detail->car->img_car }}" width="200px" alt="..."/></td>
                                    <td valign="middle"><h5>{{ $order_detail->car->name_car }}</h5></td>
                                    <td valign="middle"><h5>{{ $order_detail->rent }} Hari</h5></td>
                                    <td valign="middle"><h5>Rp. {{ number_format($order_detail->car->price_car) }}</h5></td>
                                    <td valign="middle"><h5>Rp. {{ number_format($order_detail->total_price) }}</h5></td>
                                    <td valign="middle">
                                        <form action="{{ url('rent') }}/{{ $order_detail->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5" align="center" valign="middle"><h3>Total Harga</h3></td>
                                    <td colspan="2"><h4>Rp. {{ number_format($order->price_order) }}</h4></td>
                                </tr>
                                <tr>
                                    <td colspan="7" align="right">
                                        <a href="{{ url('rent/confirm') }}" class="btn btn-success">
                                            <i class="fa fa-shopping-cart"></i> Check Out Sewa
                                        </a>
                                    </td>
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
