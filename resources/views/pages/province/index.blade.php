@extends('layouts.sidebar')


@section('content')
    <section class="mt-5">
        <div class="">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0 text-dark">Province</h4>
                <button class="btn-simpan rounded-2 p-2" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                    Add Province
                </button>
            </div>

            <div class="table-responsive mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-dark text-white">
                            <th>No</th>
                            <th>Name Province</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="btn-simpan rounded-2 px-2 py-1 btn-sm " type="button"
                                            data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                            Edit
                                        </button>
                                        <form action="{{ route('provinsi.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-hapus rounded-2 px-1 py-1 " type="submit"
                                                onclick="return confirm('Temenan?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Province New</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('provinsi.update', $item->id) }}" method="post">
                                                @csrf
                                                @method('PUT')

                                                <input type="text" name="name" placeholder="Name Province"
                                                    class="form-control mb-3" value="{{ $item->name }}">
                                                <button class="btn-simpan rounded-2 p-2" type="submit"> Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Province New</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('provinsi.store') }}" method="post">
                        @csrf

                        <input type="text" name="name" placeholder="Name Province" class="form-control mb-3">
                        <button class="btn-simpan rounded-1 " type="submit">Simpan Baru</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



