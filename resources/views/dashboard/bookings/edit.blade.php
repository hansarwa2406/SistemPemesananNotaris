@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Penjadwalan Notaris Dengan Klien</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/bookings/{{ $booking->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="nama_klien" class="form-label">Nama Klien</label>
            <input type="text" class="form-control @error('nama_klien') is-invalid @enderror" id="nama_klien" name="nama_klien" value="{{ old('nama_klien') }}" required autofocus>
            @error('nama_klien')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_notaris" class="form-label">Nama Notaris</label>
            <select class="form-select" name="nama_notaris">
                @foreach ($users as $user)
                    @if (old('nama_notaris') == $user->id)
                        <option value="{{ $user->name}}" selected>{{ $user->name }}</option>
                    @else
                        <option value="{{ $user->name}}">{{ $user->name }}</option>
                    @endif
                @endforeach
            </select>
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
    

  
    
    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>
 
 


@endsection