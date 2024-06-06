@extends('layouts.admin')
@section('content')
<div class="home-content">
    <h3>Input Berita</h3>
    <div class="form-login">
        <form action="{{ url('proses') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="judul">Judul</label>
            <input class="input" type="text" name="judul" id="judul" placeholder="Judul" required />
            <label for="kejadian">Kejadian</label>
            <input class="input" type="text" name="kejadian" id="kejadian" placeholder="Kejadian" required />
            <label for="photo">Photo</label>
            <input type="file" name="photo" id="photo" style="margin-bottom: 20px" required />
            <button type="submit" class="btn btn-simpan" name="simpan">
                Simpan
            </button>
        </form>
    </div>
</div>
@endsection
