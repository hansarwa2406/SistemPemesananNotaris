@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">{{ $pending->email_klien }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $pending->subjek_klien }}</h6>
                <p class="card-text">Alamat: {{ $pending->email_klien }}</p>
            
            <a class="btn btn-primary my-5" href="/dashboard/pendings">Kembali</a>
        </div>
    </div>
</div>
@endsection