@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title"> Email: {{ $pending->email }}</h5>
                <h6 class="card-subtitle mb-2 text-muted"> Telepon: {{ $pending->phone }}</h6>
                <p class="card-text"> Subjek: {{ $pending->subject }}</p>
                <p class="card-text">Pesan: {{ $pending->message }}</p>
                <p class="card-text">Status: {{ $pending->status }}</p>
            
            <a class="btn btn-primary my-5" href="/dashboard/pendings">Kembali</a>
        </div>
    </div>
</div>
@endsection