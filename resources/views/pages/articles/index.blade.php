@extends('layouts.sidebar')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0 text-dark">Artikel</h4>
                <a href="{{ route('artikel.create') }}" class="btn-simpan rounded-2 text-decoration-none p-2" type="button">
                    Add Artikel
                </a>
            </div>

            <div class="table-responsive mt-5">
                <table class="table table-striped">
                    <thead>
                        <tr class="table-dark text-white">
                            <th>No</th>
                            <th>Judul Artikel</th>
                            <th>Provinsi Artikel</th>
                            <th>Kategori Artikel</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->province->name}}</td>
                                <td>{{ $item->category }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="{{ route('artikel.edit', $item->id) }}" class="btn-simpan rounded-2 px-2 py-1 text-decoration-none btn-sm">Edit</a>
                                        <form action="{{ route('artikel.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-hapus rounded-2 px-1 py-1 btn-sm " type="submit"
                                                onclick="return confirm('Temenan?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
