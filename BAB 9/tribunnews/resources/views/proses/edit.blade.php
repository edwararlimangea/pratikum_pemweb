@extends('layouts.admin')
@section('content')
<div class="home-content">
    <h3>Edit Categories</h3>
    <div class="form-login">
        <form action="{{ url('proses/'.$proses->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $proses->id }}">
            <input type="hidden" name="photoLama" value="{{ $proses->photo }}">
            <label for="judul">Judul Berita</label>
            <input class="input" type="text" name="judul" id="judul" value="{{ $proses->judul }}" required />
            <label for="kejadian">Kejadian</label>
            <input class="input" type="text" name="kejadian" id="kejadian" value="{{ $proses->kejadian }}" required />
            <label for="photo">Photo</label>
            <img src="{{ asset('storage/' . $proses->photo) }}" alt="pelaku Photo" width="50px" style="margin-bottom: 20px;">
            <input type="file" name="photo" id="photo" />
            <button type="submit" class="btn btn-simpan" name="edit">Edit</button>
        </form>
    </div>
</div>
@endsection
