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
                                    <form action="{{ url('order') }}/{{ $car->id }}" method="POST">
                                    @csrf
                                    <tr>
                                        <td>Sewa Harian</td>
                                        <td>:</td>
                                        <td>
                                            <div class="input-group">
                                                <input type="text" name="daterange"/> <p class="mt-2" id="date_rent"></p>
                                                <input type="hidden" name="tgl_in" id="tgl_in"/>
                                                <input type="hidden" name="tgl_out" id="tgl_out"/>
                                                <input type="hidden" name="rent" id="days"/>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tambahan</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="yes" name="driver" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Butuh Supir (+Rp. 100.000)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="no" name="driver" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Tanpa Supir (+Rp. 0)
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td colspan="2">
                                            <div class="input-group">
                                                <button class="btn btn-success" type="submit"><i class="fa fa-car"></i> Masukkan ke Garasi</button>
                                            </div>
                                        </td>
                                    </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(function() {
    $('input[name="daterange"]').daterangepicker({
    opens: 'left'
    }, function(start, end, label) {
        var date1 = new Date(start.format('MM-DD-YYYY'));
        var date2 = new Date(end.format('MM-DD-YYYY'));
        var Difference_In_Time = date2.getTime() - date1.getTime();
        var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
        var date_final = "Anda rental dari " + start.format('YYYY-MM-DD') + ' sampai ' + end.format('YYYY-MM-DD') + ' terhitung ' + Difference_In_Days + ' hari ';
        document.getElementById("date_rent").innerHTML = date_final;
        document.getElementById("tgl_in").value = start.format('YYYY-MM-DD');
        document.getElementById("tgl_out").value = end.format('YYYY-MM-DD');
        document.getElementById("days").value = Difference_In_Days;
    });
});
</script>
@endsection
