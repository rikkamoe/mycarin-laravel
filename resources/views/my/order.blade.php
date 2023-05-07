@extends('layouts.app')

@section('content')

<!-- flatpickr -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<div class="container">
  <div class="row">
    <div class="col-12 mb-3">
      <a href="{{ url('home') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
    </div>
    <div class="col-md-6 mb-4">
      <img src="{{ url('img_uploads') }}/{{ $car->img_car }}" class="img-fluid rounded mx-auto d-block" alt="{{ $car->name_car }}">
    </div>
    <div class="col-md-6">
      <h2>{{ $car->name_car }}</h2>
      <a>Pemilik : <b>Autobagus Rent Car</b></a>
      <table class="table">
        <tbody>
          <tr>
            <td width="30%">Harga / Hari</td>
            <td width="70%"><strong>Rp. {{ number_format($car->price_car) }}</strong></td>
          </tr>
          <tr>
            <td>Tipe Mobil</td>
            <td>{{ $car->type_car }}</td>
          </tr>
          <tr>
            <td>Deskripsi Mobil</td>
            <td><pre>{{ $car->description_car }}</pre></td>
          </tr>
          <form action="{{ url('order') }}/{{ $car->id }}" method="POST">
            @csrf
            <tr>
              <td>Sewa Harian</td>
              <td>
                <div class="input-group">
                  <input type="text" name="daterange" class="form-control"/> 
                  <input type="hidden" name="tgl_in" id="tgl_in"/>
                  <input type="hidden" name="tgl_out" id="tgl_out"/>
                  <input type="hidden" name="rent" id="days"/>
                </div>
              </td>
            </tr>
            <tr>
              <td>Tambahan</td>
              <td>
                <div class="form-check mb-2">
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
              <td>
                <button class="btn btn-success" type="submit"><i class="fa fa-car"></i> Masukkan ke Garasi</button>
              </td>
            </tr>
          </form>
        </tbody>
        
      </table>
    </div>
  </div>
</div>


<script>
$(document).ready(function() {
  flatpickr('input[name="daterange"]', {
    mode: 'range',
    dateFormat: 'Y-m-d',
    onClose: function(selectedDates, dateStr, instance) {
      if (selectedDates.length > 0) {
        var days = Math.ceil((selectedDates[1] - selectedDates[0]) / (1000 * 60 * 60 * 24));
        $('#tgl_in').val(selectedDates[0].toISOString().split('T')[0]);
        $('#tgl_out').val(selectedDates[1].toISOString().split('T')[0]);
        $('#days').val(days);
        $('input[name="daterange"]').val(selectedDates[0].toLocaleDateString('id-ID') + ' - ' + selectedDates[1].toLocaleDateString('id-ID'));
      }
    },
    allowInput: true,
    clickOpens: true,
    showButtonPanel: true,
    onReady: function(selectedDates, dateStr, instance) {
      instance.element.parentNode.querySelectorAll('.flatpickr-button').forEach(function(e){
        e.innerHTML = 'Apply';
        e.style.display = 'block';
      });
    }
  });
});


</script>
@endsection
