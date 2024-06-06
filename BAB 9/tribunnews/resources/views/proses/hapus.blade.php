@extends('layouts.admin')
@section('content')
<div class="home-content">
    <h3>Hapus Berita</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data?</h4>
        <form action="{{ url('proses/' . $proses->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{ $proses->id }}">
            <button type="submit" class="btn" style="margin-top: 50px;">Yes</button>
            <button type="button" class="btn" onclick="window.location.href='{{ url('proses') }}'">No</button>
        </form>
    </div>
</div>
@endsection
