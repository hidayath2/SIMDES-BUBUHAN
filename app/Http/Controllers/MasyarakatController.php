<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\File;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('halamanadmin.masyarakat', [
            'datamasyarakat' => User::latest()->get()
        ]);
    }

    public function datapribadi()
    {
        return view('halamanmasyarakat.datapribadi', [
            'datapribadi' => User::findOrFail(auth()->user()->id)
        ]);
    }

    public function dusunkinali()
    {
        $dusunkinali=User::where('dusun', '=', 'kinali')->get();
        // dd($dusunkinali);

        return view('isiadmin.kinali', compact('dusunkinali'));
    }

    public function dusuntulus()
    {
        $dusuntulus=User::where('dusun', '=', 'tulus')->get();
        // dd($dusunkinali);

        return view('isiadmin.tulus', compact('dusuntulus'));
    }

    public function dusunikhlas()
    {
        $dusunikhlas=User::where('dusun', '=', 'ikhlas')->get();
        // dd($dusunikhlas);

        return view('isiadmin.ikhlas', compact('dusunikhlas'));
    }

    public function dusunsuangking()
    {
        $dusunsuangking=User::where('dusun', '=', 'suangking')->get();
        // dd($dusunsuangking);

        return view('isiadmin.suangking', compact('dusunsuangking'));
    }

    public function sudahmenikah()
    {
        $sudahmenikah=User::where('status', '=', 'sudah menikah')->get();
        // dd($dusunsuangking);

        return view('isiadmin.sudahmenikah', compact('sudahmenikah'));
    }

    public function belummenikah()
    {
        $belummenikah=User::where('status', '=', 'belum menikah')->get();
        // dd($dusunsuangking);

        return view('isiadmin.belummenikah', compact('belummenikah'));
    }

    public function pekerjaan()
    {
        $pekerjaan=User::where('pekerjaan', '=', 'pelajar')->get();
        // dd($dusunsuangking);

        return view('isiadmin.pekerjaan', compact('pekerjaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahadmin.masyarakat');
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
            'nik' => 'nullable', 
            'nokk' => 'nullable', 
            'nama' => 'nullable', 
            'tempatlahir' => 'nullable', 
            'tanggallahir' => 'nullable', 
            'jeniskelamin' => 'nullable', 
            'agama' => 'nullable', 
            'dusun' => 'nullable', 
            'status' => 'nullable', 
            'pekerjaan' => 'nullable', 
            'notelpon' => 'nullable', 
            'alamat' => 'nullable', 
            'email' => 'nullable', 
            'password' => 'nullable',
            'role' => 'nullable'
        ]);

        // if($request->file('image')){
        //     // $validateData['image'] = $request->file('image')->store('gambar-user');
        //     $request->file('image')->store('public/gambar-user');
        //     $validateData['image'] = $request->file('image')->hashName();
        // }
        // $validateData['excerpt'] = Str::limit(strip_tags($request->isi), 20);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/masyarakat')->with('succes', 'data Masyarakat berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $daftarmasyarakat = User::findOrFail($id);

        return view('isiadmin.masyarakat', compact('daftarmasyarakat'));
        // return $daftarmasyarakat;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datapribadi=User::findOrFail($id);

        return view('editmasyarakat.datapribadi', [
            'datapribadi' => $datapribadi
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
        $datapribadi=User::findOrFail($id);
        $validateData = $request->validate([
            'image' => 'image|file',
            'nik' => 'nullable',
            'nokk' => 'nullable',
            'nama' => 'nullable',
            'tempatlahir' => 'nullable',
            'tanggallahir' => 'nullable',
            'jeniskelamin' => 'nullable',
            'agama' => 'nullable',
            'dusun' => 'nullable',
            'status' => 'nullable',
            'pekerjaan' => 'nullable',
            'notelpon' => 'nullable',
            'alamat' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable'
        ]);
            // dd($validateData);

        // if($request->file('image')){
        //     File::delete(storage_path('gambar-user/', $datapribadi->image));
        //     $validateData['image'] = $request->file('image')->store('gambar-user');
        // }
        if($request->file('image')){
            // File::delete(storage_path('gambar-user/', $datapribadi->image));
            $request->file('image')->store('public/gambar-user');
            $validateData['image'] = $request->file('image')->hashName();
            
        }

        $validateData['password'] = Hash::make($validateData['password']);

        User::where('id', $id)
                    ->update($validateData);

        return redirect('/datapribadi')->with('succes', 'Data Anda Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarmasyarakat = User::findOrFail($id);
        $daftarmasyarakat->delete();

        return redirect( route('masyarakat.index'))->with('succes', 'data masyarakat berhasil di hapus');
    }
}
