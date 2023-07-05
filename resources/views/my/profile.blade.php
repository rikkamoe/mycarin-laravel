@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4><i class="fa fa-user"></i> Profil Saya</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            @if (!empty($user->telephone) && !empty($user->address))
                            <tr>
                                <td>No. Hp</td>
                                <td>:</td>
                                <td>{{ $user->telephone }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{ $user->address }}</td>
                            </tr>
                            @else
                            <tr>
                                <td>No. Hp</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>-</td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h4><i class="fa fa-pencil-alt"></i> Edit Profil Saya</h4>
                    <form method="post" action="{{ url('profile') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Nama') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{$user->name}}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="rikka@gmail.com" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="telephone">{{ __('No. HP') }}</label>
                            <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" placeholder="{{$user->telephone}}" required autocomplete="telephone" autofocus>

                            @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">{{ __('Alamat') }}</label>
                            <textarea rows="4" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="{{$user->address}}" required></textarea>

                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password Baru') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>

                        <div class="form-group">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                                <button type="reset" class="btn btn-danger ml-3">
                                    Reset
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection