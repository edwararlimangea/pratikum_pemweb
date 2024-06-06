<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\proses_polisi;
use Illuminate\Support\Facades\Storage;
class prosespolisiController extends Controller
{
    public function index()
    {
        $data = proses_polisi::all();
        return view('proses.index')->with('proses', $data);
    }

    public function create()
    {
        return view('proses.create');
    }

    public function store(Request $request)
    {
        $data = [
            'photo' => $request->photo->store('photos', 'public'),
            'judul' => $request->judul,
            'kejadian' => $request->kejadian,
        ];
        proses_polisi::create($data);
        return redirect()->to('proses')->with('success', 'Berhasil tambah data');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $proses = proses_polisi::findOrFail($id);
        return view('proses.edit')->with('proses', $proses);
    }

    public function update(Request $request, string $id)
    {
        $proses = proses_polisi::findOrFail($id);
        if ($request->hasFile('photo')) {
            if ($proses->photo && Storage::disk('public')->exists($proses->photo)) {
                Storage::disk('public')->delete($proses->photo);
            }
            $photoPath = $request->photo->store('photos', 'public');
        } else {
            $photoPath = $proses->photo;
        }
        $proses->update([
            'photo' => $photoPath,
            'judul' => $request->judul,
            'kejadian' => $request->kejadian,
        ]);
        return redirect()->to('proses')->with('success', 'Berhasil Ubah data');
    }

    public function destroy(string $id)
    {
        $proses = proses_polisi::findOrFail($id);
        if ($proses->photo && Storage::disk('public')->exists($proses->photo)) {
            Storage::disk('public')->delete($proses->photo);
        }
        $proses->delete();
        return redirect()->to('proses')->with('success', 'Berhasil Hapus data');
    }
}
