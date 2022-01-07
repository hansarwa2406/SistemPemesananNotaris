@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pendings</h1>
    </div>

    @if (session('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/pendings/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Data Pending</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class=" text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. Tlp</th>
                    <th scope="col">Subjek</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pending as $pendings)
                    <tr>
                        <td class=" text-center">{{ $loop->iteration }}</td>
                        <td>{{ $pendings->email }}</td>
                        <td>{{ $pendings->phone }}</td>
                        <td>{{ $pendings->subject}}</td>
                        <td>{{ $pendings->message }}</td>

                        <td class=" text-center">
                            <a href="/dashboard/pendings/{{ $pendings->email }}" class="badge bg-info text-decoration-none" title="View"><span data-feather="eye"></a>
                            <a href="/dashboard/pendings/{{ $pendings->email }}/edit" class="badge bg-warning text-decoration-none" title="Edit"><span data-feather="edit"></a>

                            

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
                                    Apakah anda ingin menghapus data pending: <strong>"{{ $pendings->email }}"</strong> ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="/dashboard/pendings/{{ $pendings->email }}" method="POST" class=" d-inline">
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

