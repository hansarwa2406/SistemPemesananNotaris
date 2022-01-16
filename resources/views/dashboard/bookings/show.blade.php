@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <p class="card-title">Klien: {{ $booking->nama_klien }}</p>
                <p class="card-subtitle mb-2 text-muted">Notaris: {{ $booking->nama_notaris }}</p>
                <p class="card-text">Perihal: {{ $booking->subject }}</p>
                <p class="card-text">Mulai: {{ $booking->start_date }}</p>
                <p class="card-text">Selesai: {{ $booking->end_date }}</p>
    
            <a class="btn btn-primary my-5" href="/dashboard/bookings">Kembali</a>
        </div>
    </div>
</div>
@endsection