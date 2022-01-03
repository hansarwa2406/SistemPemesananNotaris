@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Klien</h1>
    </div>

    @if (session('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/clients/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Data Klien</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class=" text-center">
                    <th scope="col">No.</th>
                    <th scope="col">ID Klien</th>
                    <th scope="col">Nama Klien</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $clients)
                    <tr>
                        <td class=" text-center">{{ $loop->iteration }}</td>
                        <td>{{ $clients->id_klien }}</td>
                        <td>{{ $clients->nama_klien }}</td>
                        <td>{{ $clients->alamat }}</td>
                        <td>{{ $clients->no_tlp }}</td>
                     
                        <td class=" text-center">
                            <a href="/dashboard/klien/{{ $clients->id_klien }}" class="badge bg-info text-decoration-none" title="View"><span data-feather="eye"></a>
                            <a href="/dashboard/klien/{{ $clients->id_klien }}/edit" class="badge bg-warning text-decoration-none" title="Edit"><span data-feather="edit"></a>

                            <!-- Button trigger modal -->
                            <button type="button" class="badge bg-danger border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete">
                                <span data-feather="trash-2">
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah anda ingin menghapus klien: <strong>"{{ $clients->id_klien }}"</strong> ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <form action="/dashboard/clients/{{ $clients->id_klien }}" method="POST" class=" d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        </div>
    </div>
    </div>
@endsection

