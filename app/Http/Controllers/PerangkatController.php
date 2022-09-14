<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\perangkat;
use Illuminate\Support\Str;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamanadmin.perangkat', [
            'daftarperangkat' => perangkat::latest()->get()
        ]);
    }

    public function showall()
    {
        $daftarperangkat = perangkat::all();
        return view('allmasyarakat.perangkat', compact('daftarperangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahadmin.perangkat');
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
            'nama' => 'required',
            // 'excerpt' => 'required',
            'jabatan' => 'required',
            'notelpon' => 'required'
        ]);
        if($request->file('image')){
            // $validateData['image'] = $request->file('image')->store('gambar-proyek');
            $request->file('image')->store('public/gambar-perangkat');
            $validateData['image'] = $request->file('image')->hashName();
        }
        // $validateData['password'] = Hash::make($validateData['password']);

        perangkat::create($validateData);

        return redirect('/perangkat')->with('succes', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftarperangkat = perangkat::findOrFail($id);

        return view('isiadmin.perangkat', compact('daftarperangkat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftarperangkat=perangkat::findOrFail($id);

        return view('editadmin.perangkat', [
            'daftarperangkat' => $daftarperangkat
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
        $daftarperangkat=perangkat::findOrFail($id);
        // return $postperangkat;
        $validateData = $request->validate([
            'nama' => 'required',
            // 'excerpt' => 'required',
            'jabatan' => 'required',
            'notelpon' => 'required'
        ]);

        // if($request->file('image')){
        //     $validateData['image'] = $request->file('image')->store('gambar-perangkat');
        //  }

        // $validateData['excerpt'] = Str::limit(strip_tags($id), 20);

        perangkat::where('id', $id)
                    ->update($validateData);

        return redirect('/perangkat')->with('succes', 'data berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarperangkat = perangkat::findOrFail($id);
        $daftarperangkat->delete();

        return redirect( route('perangkat.index'))->with('succes', 'data perangkat berhasil di hapus');
    }
}
