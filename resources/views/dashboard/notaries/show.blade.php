@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">{{ $notary->nama_notaris }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $notary->id_notaris }}</h6>
                <p class="card-text">Alamat: {{ $notary->alamat }}</p>
                <p class="card-text">Kontak: {{ $notary->no_tlp }}</p>
                <p class="card-text">Jabatan: {{ $notary->jabatan }}</p>
    
            <a class="btn btn-primary my-5" href="/dashboard/notaries">Kembali</a>
        </div>
    </div>
</div>
@endsection