@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">{{ $client->nama_klien }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $client->id_klien }}</h6>
                <p class="card-text">Alamat: {{ $client->alamat }}</p>
                <p class="card-text">Kontak: {{ $client->no_tlp }}</p>
    
            <a class="btn btn-primary my-5" href="/dashboard/clients">Kembali</a>
        </div>
    </div>
</div>
@endsection