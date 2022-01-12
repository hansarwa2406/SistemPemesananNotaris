@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data pending</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/pendings/{{ $pending->email }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $pending->email) }}" required autofocus>
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="phone" class="form-label">No. Tlp</label>
          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $pending->phone) }}" required autofocus>
          @error('phone')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="subject" class="form-label">Subjek</label>
          <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject', $pending->subject) }}" required autofocus>
          @error('subject')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="message" class="form-label">Pesan</label>
          <input type="text" class="form-control @error('message') is-invalid @enderror" id="message" name="message" value="{{ old('message', $pending->message) }}" required autofocus>
          @error('message')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>

      <div class="mb-3">
        <label for="status" class="form-label">Persetujuan</label>
        <select class="form-select" name="status">
            <option value="Ditolak" selected>Ditolak</option>
            <option value="Disetujui">Disetujui</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>

@endsection