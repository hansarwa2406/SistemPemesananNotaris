@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Pending</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/pendings">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">No. Tlp</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required autofocus>
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subjek</label>
                <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" required autofocus>
                @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <input type="text" class="form-control @error('message') is-invalid @enderror" id="message" name="message" value="{{ old('message') }}" required autofocus>
                @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
           

        <button type="submit" class="btn btn-primary">Tambah Data Pending</button>
    </form>
    </div>
@endsection