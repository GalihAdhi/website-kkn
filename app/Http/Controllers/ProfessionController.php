<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/data_desa/profesi/create', [
            'title' => 'Data UMKM Desa Kismoyoso'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'produk' => 'required|min:4|max:30',
            'pemilik' => 'required|min:4|max:30',
            'nomor' => 'required|min:4|max:30',
            'alamat' => 'required|min:4|max:30',
            'gmaps' => 'required|min:4|max:30',
            'gambar' => 'image|file|max:8000',
        ]);
        if($request->file('gambar')){
            $data['gambar'] = $request->file('gambar')->store('gambar_umkm');
        }
        $data['uri'] = Str::random(30);
        Profession::create($data);
        return redirect('/admin/data_desa')->with('profession_created', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function show(Profession $profession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function edit(Profession $data_profesi)
    {
        return view('admin/data_desa/profesi/edit', [
            'title' => 'Data profesi Kelurahan',
            'data' => $data_profesi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profession $data_profesi)
    {
        $data = $request->validate([
            'produk' => 'required|min:4|max:30',
            'pemilik' => 'required|min:4|max:30',
            'nomor' => 'required|min:4|max:30',
            'alamat' => 'required|min:4|max:30',
            'gmaps' => 'required|min:4|max:30',
            'gambar' => 'image|file|max:8000',
        ]);
        if ($request->hasFile('gambar')) {
            if($data_profesi->gambar != null){
                Storage::delete($data_profesi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar_artikel');
        }
        Profession::where('id', $data_profesi->id)->update($data);
        return redirect('/admin/data_desa')->with('profession_updated', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profession  $profession
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profession $data_profesi)
    {
        Profession::destroy($data_profesi->id);
        return redirect('/admin/data_desa')->with('profession_deleted', 'Data berhasil dihapus');
    }
}
