@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Penjadwalan Notaris Dengan Klien</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/bookings">
            @csrf
            <div class="mb-3">
                <label for="nama_klien" class="form-label">Nama Klien</label>
                <input type="text" class="form-control @error('nama_klien') is-invalid @enderror" id="nama_klien" name="nama_klien" value="{{ old('nama_klien') }}" required autofocus>
                @error('nama_klien')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nama_notaris" class="form-label">Nama Notaris</label>
                <input type="text" class="form-control @error('nama_notaris') is-invalid @enderror" id="nama_notaris" name="nama_notaris" value="{{ old('nama_notaris') }}" required autofocus>
                @error('nama_notaris')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subjek" class="form-label">Subjek</label>
                <input type="text" class="form-control @error('subjek') is-invalid @enderror" id="subjek" name="subjek" value="{{ old('subjek') }}" required autofocus>
                @error('subjek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="dateTime" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required autofocus>
                @error('waktu')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
    </form>
    </div>
@endsection