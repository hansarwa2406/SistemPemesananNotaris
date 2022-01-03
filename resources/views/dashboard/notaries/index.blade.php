@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Notaris</h1>
    </div>

    @if (session('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/notaries/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Data Notaris</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class=" text-center">
                    <th scope="col">No.</th>
                    <th scope="col">ID Notaris</th>
                    <th scope="col">Nama Notaris</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notary as $notaries)
                    <tr>
                        <td class=" text-center">{{ $loop->iteration }}</td>
                        <td>{{ $notaries->id_notaris }}</td>
                        <td>{{ $notaries->nama_notaris }}</td>
                        <td>{{ $notaries->alamat }}</td>
                        <td>{{ $notaries->no_tlp }}</td>
                        <td>{{ $notaries->jabatan }}</td>

                        <td class=" text-center">
                            <a href="/dashboard/notaries/{{ $notaries->id_notaris }}" class="badge bg-info text-decoration-none" title="View"><span data-feather="eye"></a>
                            <a href="/dashboard/notaries/{{ $notaries->id_notaris }}/edit" class="badge bg-warning text-decoration-none" title="Edit"><span data-feather="edit"></a>

                            <!-- Button trigger modal -->
                            <button type="button" class="badge bg-danger border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Delete">
                                <span data-feather="trash-2">
                            </button>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda ingin menghapus notaris: <strong>"{{ $notaries->id_notaris }}"</strong> ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="/dashboard/notaries/{{ $notaries->id_notaris }}" method="POST" class=" d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

