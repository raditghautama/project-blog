@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h4 class="mb-5">Edit Articles {{ $item->title }}</h4>
    <form action="{{route('artikel.update', $item->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="mb-3">
            <label for="provinsi_id">Province Name</label>
            <select name="provinsi_id" id="provinsi_id" class="form-control shadow-none" required>
                @foreach ($provinces as $province)
                <option value="{{$province->id}}" {{ $province->id == $item->provinsi_id ? "SELECTED" : "" }}>{{$province->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $item->title }}" required>
        </div>
        <div class="mb-3">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="Makanan" {{ $item->category == 'Makanan' ? "SELECTED" : "" }}>Makanan</option>
                <option value="Minuman" {{ $item->category == 'Minuman' ? "SELECTED" : "" }}>Minuman</option>

            </select>
        </div>
        <div class="mb-3">
            <label for="body">body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required>{{ $item->body }}</textarea>
        </div>
        <div class="mb-3">
            <label for="cover">Image</label>
            <input type="file" accept="image/*" name="cover" class="form-control" id="cover" >
            <span class="text-secondary">Diisi jika ingin mengganti gambar</span>
        </div>
        <div class="d-flex align-items-center gap-3">
            <button class="btn-simpan rounded-2 p-2 px-3" type="submit">Save Changes</button>
            <a href="{{route('artikel.index')}}" class="btn btn-light px-3">Back</a>
        </div>
    </form>

</div>
@endsection
