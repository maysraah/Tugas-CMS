<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Travel;

class TravelController extends Controller
{
    public function index()
    {
        $data['travels'] = DB::table('travels')->get();
        return view('travel', $data);
    }

    public function create()
    {
        return view('addTravel');
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

        $query = DB::table('travels')->insert([
            'header' => $headerInput,
            'author' => $authorInput,
            'image' => $imageInput,
            'description' => $descriptionInput
        ]);

        if ($query) {
            return redirect()->route('admin.tabel_data_travel.index')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('admin.tabel_data_travel.index')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    public function show($id)
    {
        $data['travels'] = DB::table('travels')->where('id', $id)->first();

        return view('updateTravel', $data);
    }

    public function edit($id)
    {
        $data['travels'] = DB::table('travels')->where('id', $id)->first();

        return view('upadateTravel', $data);
    }

    public function update(Request $request, $id)
    {
        $headerInput = $request->input('headerInput');
        $authorInput = $request->input('authorInput');
        $imageInput = $request->file('imageInput')->store('post-images');
        $descriptionInput = $request->input('descriptionInput');

        $query = DB::table('travels')->where('id', $id)->update([
            'header' => $headerInput,
            'author' => $authorInput,
            'image' => $imageInput,
            'description' => $descriptionInput
        ]);

        if ($query) {
            return redirect()->route('admin.tabel_data_travel.index')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('admin.tabel_data_travel.index')->with('failed', 'Data Gagal Diupdate');
        }

    }

    public function destroy($id)
    {
        $query = DB::table('travels')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('admin.tabel_data_travel.index')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('admin.tabel_data_travel.index')->with('failed', 'Data Gagal Dihapus');
        }
    }
}