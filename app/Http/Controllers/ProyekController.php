<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use App\Models\kegiatan;
use App\Models\perangkat;
use Illuminate\Http\Request;
use App\Models\proyek;
use Illuminate\Support\Str;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamanadmin.proyek', [
            'daftarproyek' => proyek::latest()->get()
        ]);
    }

    public function detailproyek($id)
    {
        $daftarproyek = proyek::where('id',$id)->get()->first();    
        return view('isimasyarakat.proyek', compact('daftarproyek'));
    }

    public function depan()
    {
        $daftarproyek = proyek::latest()->paginate(3);
        $datakegiata = kegiatan::latest()->paginate(3);
        $dataperangkat = perangkat::paginate(3);
        $daftaragenda = agenda::latest()->paginate(5);
        return view('masyarakat.depan', compact('daftarproyek','datakegiata','dataperangkat','daftaragenda'));
    }

    public function showall()
    {
        $daftarproyek = proyek::latest()->get();
        // $datakegiata = kegiatan::latest()->paginate(3);
        // $dataperangkat = perangkat::latest()->paginate(3);
        return view('allmasyarakat.proyek', compact('daftarproyek'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahadmin.proyek');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('gambar-proyek'); 
        // dd($request);
        $validateData = $request->validate([
            'image' => 'image|file',
            'judul' => 'required',
            // 'excerpt' => 'required',
            'isi' => 'required'
        ]);

        if($request->file('image')){
            // $validateData['image'] = $request->file('image')->store('gambar-proyek');
            $request->file('image')->store('public/gambar-proyek');
            $validateData['image'] = $request->file('image')->hashName();
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->isi), 150);

        proyek::create($validateData);

        return redirect('/proyek')->with('succes', 'data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftarproyek = proyek::findOrFail($id);

        return view('isiadmin.proyek', compact('daftarproyek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftarproyek=proyek::findOrFail($id);

        return view('editadmin.proyek', [
            'daftarproyek' => $daftarproyek
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
        $daftarproyek=proyek::findOrFail($id);
        // return $postproyek;
        $validateData = $request->validate([
            'judul' => 'required',
            'isi' => 'required'
            // 'password' => 'required'
        ]);

        // if($request->file('image')){
        //     $validateData['image'] = $request->file('image')->store('gambar-proyek');
        //  }

        $validateData['excerpt'] = Str::limit(strip_tags($id), 150);

        proyek::where('id', $id)
                    ->update($validateData);

        return redirect('/proyek')->with('succes', 'data berhasil di Update');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarproyek = proyek::findOrFail($id);
        $daftarproyek->delete();

        return redirect( route('proyek.index'))->with('succes', 'data proyek berhasil di hapus');
    }
}



