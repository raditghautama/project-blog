@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h4 class="mb-5">Create New Articles</h4>
    <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="mb-3">
            <label for="provinsi_id">Province Name</label>
            <select name="provinsi_id" id="provinsi_id" class="form-control shadow-none" required>
                @foreach ($provinces as $item)
                <option value="{{$item->id}}">{{$item->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="category">Category</label>
            <select name="category" id="category" class="form-control" required>
                <option value="Makanan">Makanan</option>
                <option value="Minuman">Minuman</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="5" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="cover">Image</label>
            <input type="file" accept="image/*" name="cover" class="form-control" id="cover" required>
        </div>
        <div class="d-flex align-items-center gap-3">
            <button class="btn-simpan rounded-2 p-2 px-3" type="submit">Save New Data</button>
            <a href="{{route('artikel.index')}}" class="btn btn-light px-3">Back</a>
        </div>

    </form>

</div>
@endsection
