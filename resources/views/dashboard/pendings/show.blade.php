@extends('dashboard.layouts.main')

@section('container')
    <div class="container row pt-3">
        <div class="col-lg-3">
            <div class="card-header">
                <strong>Konfirmasi Klien</strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Email: {{ $pending->email }}</li>
                <li class="list-group-item">Telepon: {{ $pending->phone }}</li>
                <li class="list-group-item">Subjek: {{ $pending->subject }}</li>
                <li class="list-group-item">Pesan: {{ $pending->message }}</li>
                <li class="list-group-item">Status: {{ $pending->status }}</li>
            </ul>
        </div>

        <div class="col-lg-6 pt-3">
            <form method="POST" action="/dashboard/bookings/completed">
                @csrf
                <div class="mb-3">
                    <label for="nama_klien" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama_klien') is-invalid @enderror" id="nama_klien" nama_klien="nama_klien" value="{{ old('nama_klien') }}" required autofocus>
                    @error('nama_klien')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required autofocus></textarea>
                    @error('alamat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Mulai</label>
                    <input type="datetime-local" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date') }}" placeholder="start_date" required autofocus>
                    @error('start_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                    <div class="mb-3">
                    <label for="end_date" class="form-label">Selesai</label>
                    <input type="datetime-local" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date') }}" placeholder="end_date" required autofocus>
                    @error('end_date')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <input type="hidden" id="status" name="status" value="Disetujui">

                <button type="submit" class="btn btn-success">Lengkapi Data</button>
            </form>
        </div>
        
        <div class="my-5">
            <a class="btn btn-primary" href="/dashboard/pendings">Kembali</a>
            <form action="/dashboard/pendings/{{ $pending->email }}" method="POST" class=" d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger mx-3">Hapus Permohonan</button>
            </form>
        </div>
    </div>
@endsection