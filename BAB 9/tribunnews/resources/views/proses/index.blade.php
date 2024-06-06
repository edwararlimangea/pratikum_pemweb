@extends('layouts.admin')
@section('content')
<div class="home-content">
    <h3>Berita</h3>
    @include('komponen.pesan')
    <button type="button" class="btn btn-tambah">
        <a href='{{ url('proses/create') }}'>+ Tambah Data</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col" style="width: 3%">No</th>
                <th scope="col" style="width: 20%">Foto Pelaku</th>
                <th scope="col" style="width: 20%">Judul Berita</th>
                <th scope="col" style="width: 20%">Tanggal, bulan dan tahun kejadian</th>
                <th scope="col" style="width: 30%">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proses as $item)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td><img src="{{ asset('storage/' . $item->photo) }}" alt="Foto Pelaku" width="100" height="100"></td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->kejadian }}</td>
                <td>
                    <a href="{{ url('proses/' . $item->id . '/edit') }}" class='btn-edit'>Edit</a> |
                    <form action="{{ url('proses/' . $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this item?');">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
