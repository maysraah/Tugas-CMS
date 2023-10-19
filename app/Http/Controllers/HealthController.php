<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Health;

class HealthController extends Controller
{
    public function index()
    {
        $data['healths'] = DB::table('healths')->get();
        return view('health', $data);
    }

    public function create()
    {
        return view('addHealth');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'headerInput' => 'required|max:255',
            'authorInput' => 'required',
            'imageInput' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'descriptionInput' => 'required',
        ]);

        if($request->file('imageInput')){
            $validatedData['imageInput'] = $request->file('imageInput')->store('post-images');
        }

        $headerInput = $request->input('headerInput');
        $authorInput = $request->input('authorInput');
        $imageInput = $request->file('imageInput')->store('post-images');
        $descriptionInput = $request->input('descriptionInput');

        // dd($request->input(''));

        $query = DB::table('healths')->insert([
            'header' => $headerInput,
            'author' => $authorInput,
            'image' => $imageInput,
            'description' => $descriptionInput
        ]);

        if ($query) {
            return redirect()->route('admin.tabel_data_health.index')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.tabel_data_health.index')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function show($id)
    {
        $data['healths'] = DB::table('healths')->where('id', $id)->first();

        return view('updateHealth', $data);
    }

    public function edit($id)
    {
        $data['healths'] = DB::table('healths')->where('id', $id)->first();

        return view('updateHealth', $data);
    }

    public function update(Request $request, $id)
    {
        $headerInput = $request->input('headerInput');
        $authorInput = $request->input('authorInput');
        $imageInput = $request->file('imageInput')->store('post-images');
        $descriptionInput = $request->input('descriptionInput');

        $query = DB::table('healths')->where('id', $id)->update([
            'header' => $headerInput,
            'author' => $authorInput,
            'image' => $imageInput,
            'description' => $descriptionInput
        ]);

        if ($query) {
            return redirect()->route('admin.tabel_data_health.index')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('admin.tabel_data_health.index')->with('failed', 'Data Gagal Diupdate');
        }

    }

    public function destroy($id)
    {
        $query = DB::table('healths')->where('id', $id)->delete();

        // Hapus file gambar terkait
        if (Storage::exists('public/post-images/' . $healths->image)) {
            Storage::delete('public/post-images/' . $healths->image);
        }

        if ($query) {
            return redirect()->route('admin.tabel_data_health.index')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.tabel_data_health.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}