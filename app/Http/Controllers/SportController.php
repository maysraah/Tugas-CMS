<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sport;

class SportController extends Controller
{
    public function index()
    {
        $data['sports'] = DB::table('sports')->get();
        return view('sport', $data);
    }

    public function create()
    {
        return view('addSport');
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

        $query = DB::table('sports')->insert([
            'header' => $headerInput,
            'author' => $authorInput,
            'image' => $imageInput,
            'description' => $descriptionInput
        ]);

        if ($query) {
            return redirect()->route('admin.tabel_data_sport.index')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.tabel_data_sport.index')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function show($id)
    {
        $data['sports'] = DB::table('sports')->where('id', $id)->first();

        return view('updateSport', $data);
    }

    public function edit($id)
    {
        $data['sports'] = DB::table('sports')->where('id', $id)->first();

        return view('upadateSport', $data);
    }

    public function update(Request $request, $id)
    {
        $headerInput = $request->input('headerInput');
        $authorInput = $request->input('authorInput');
        $imageInput = $request->file('imageInput')->store('post-images');
        $descriptionInput = $request->input('descriptionInput');

        $query = DB::table('sports')->where('id', $id)->update([
            'header' => $headerInput,
            'author' => $authorInput,
            'image' => $imageInput,
            'description' => $descriptionInput
        ]);

        if ($query) {
            return redirect()->route('admin.tabel_data_sport.index')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('admin.tabel_data_sport.index')->with('failed', 'Data Gagal Diupdate');
        }

    }

    public function destroy($id)
    {
        $query = DB::table('sports')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('admin.tabel_data_sport.index')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.tabel_data_sport.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}