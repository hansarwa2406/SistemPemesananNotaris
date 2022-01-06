@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Pending</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/pendings">
            @csrf
            <div class="mb-3">
                <label for="email_client" class="form-label">Email</label>
                <input type="text" class="form-control @error('email_client') is-invalid @enderror" id="email_client" name="email_client" value="{{ old('email_client') }}" required autofocus>
                @error('email_client')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subject_client" class="form-label">Subjek</label>
                <input type="text" class="form-control @error('subject_client') is-invalid @enderror" id="subject_client" name="subject_client" value="{{ old('subject_client') }}" required autofocus>
                @error('subject_client')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="message_client" class="form-label">Pesan</label>
                <input type="text" class="form-control @error('message_client') is-invalid @enderror" id="message_client" name="message_client" value="{{ old('message_client') }}" required autofocus>
                @error('message_client')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
           

        <button type="submit" class="btn btn-primary">Tambah Data Pending</button>
    </form>
    </div>
@endsection