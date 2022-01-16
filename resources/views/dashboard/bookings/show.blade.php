@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">{{ $booking->nama_klien }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $booking->nama_notaris }}</h6>
                <p class="card-text">Perihal: {{ $booking->subject }}</p>
                <p class="card-text">Mulai: {{ $booking->start_date }}</p>
                <p class="card-text">Selesai: {{ $booking->end_date }}</p>
    
            <a class="btn btn-primary my-5" href="/dashboard/bookings">Kembali</a>
        </div>
    </div>
</div>
@endsection