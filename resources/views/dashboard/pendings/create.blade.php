@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Pending</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/pendings">
            @csrf
            <div class="mb-3">
                <label for="email_klien" class="form-label">Email</label>
                <input type="text" class="form-control @error('email_klien') is-invalid @enderror" id="email_klien" name="email_klien" value="{{ old('email_klien') }}" required autofocus>
                @error('email_klien')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subjek_klien" class="form-label">Subjek</label>
                <input type="text" class="form-control @error('subjek_klien') is-invalid @enderror" id="subjek_klien" name="subjek_klien" value="{{ old('subjek_klien') }}" required autofocus>
                @error('subjek_klien')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pesan_klien" class="form-label">Pesan</label>
                <input type="text" class="form-control @error('pesan_klien') is-invalid @enderror" id="pesan_klien" name="pesan_klien" value="{{ old('pesan_klien') }}" required autofocus>
                @error('pesan_klien')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
           

        <button type="submit" class="btn btn-primary">Tambah Data Pending</button>
    </form>
    </div>
@endsection