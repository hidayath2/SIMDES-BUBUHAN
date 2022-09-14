<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use App\Models\perangkat;
use App\Models\proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamanadmin.kegiatan', [
            'daftarkegiatan' => kegiatan::latest()->get()
        ]);
    }

    public function detail($id)
    {
        // return $id;
        $kegiatan = kegiatan::where('id',$id)->get()->first();
        return view('isimasyarakat.kegiatan', compact('kegiatan'));
    }

    public function showall()
    {
        $daftarkegiatan = kegiatan::latest()->get();
        return view('allmasyarakat.kegiatan', compact('daftarkegiatan'));
    }
    // public function kegiatan()
    // {
    //     return view('masyarakat.depan', [
    //         'daftarkegiatan' => kegiatan::latest()->get()
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahadmin.kegiatan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'image|file',
            'judul' => 'required',
            // 'excerpt' => 'required',
            'isi' => 'required'
        ]);

        if($request->file('image')){
            // $validateData['image'] = $request->file('image')->store('gambar-kegiatan');
            $request->file('image')->store('public/gambar-kegiatan');
            $validateData['image'] = $request->file('image')->hashName();
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->isi), 200);

        // $validateData['password'] = Hash::make($validateData['password']);

        kegiatan::create($validateData);

        return redirect('/kegiatan')->with('succes', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftarkegiatan = kegiatan::findOrFail($id);

        return view('isiadmin.kegiatan', compact('daftarkegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftarkegiatan=kegiatan::findOrFail($id);

        return view('editadmin.kegiatan', [
            'daftarkegiatan' => $daftarkegiatan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $daftarkegiatan=kegiatan::findOrFail($id);
        // return $postproyek;
        $validateData = $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        // if($request->file('image')){
        //     $validateData['image'] = $request->file('image')->store('gambar-proyek');
        //  }

        $validateData['excerpt'] = Str::limit(strip_tags($id), 20);

        kegiatan::where('id', $id)
                    ->update($validateData);

        return redirect('/kegiatan')->with('succes', 'data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarkegiatan = kegiatan::findOrFail($id);
        $daftarkegiatan->delete();

        return redirect( route('kegiatan.index'))->with('succes', 'Data Kegiatan berhasil di hapus');
    }
}
