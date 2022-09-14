
@extends('layouts.masyarakat')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session()->has('succes'))

{{-- <div class="alert alert-success" role="alert">
  {{ session('succes') }}
</div> --}}
<script>
    swal("{{ session('succes') }}", "", "success");
</script>
@endif
<form method="post" action="{{  route('datapribadi.update', $datapribadi->id)  }}" enctype="multipart/form-data">
    @method('put')
    @csrf 
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right" style="margin-top: -30px;">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <label for="image">
                    {{-- <img class="rounded-circle mt-5" width="200px" height="200px" src="{{ asset('storage/' . $datapribadi->image) }}"> --}}
                    <img src="{{ asset('storage/public/gambar-user/' . $datapribadi->image) }}" class="img-fluid" style="height: 300px">   
                    
                    </label>
                        <span class="font-weight-bold">{{ $datapribadi->nama }}</span>
                        <span class="text-black-50">{{ $datapribadi->email }}</span>
                    </div>
                </div>               
                <div class="col-lg-7 border-right">
                    <div class="p-3 py-5">
                            {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div> --}}
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <label for="nik" class="labels">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" autofocus value="{{ old('nik', $datapribadi->nik) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="nokk" class="labels">NO KK</label>
                                <input type="text" class="form-control" id="nokk" name="nokk" autofocus value="{{ old('nokk', $datapribadi->nokk) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="nama" class="labels">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" autofocus value="{{ old('nama', $datapribadi->nama) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="tempatlahir" class="labels">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" autofocus value="{{ old('tempatlahir', $datapribadi->tempatlahir) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="tanggallahir" class="labels">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" autofocus value="{{ old('tanggallahir', explode(' ', $datapribadi->tanggallahir)[0]) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="jeniskelamin" class="labels">Jenis Kelamin</label>
                                <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" autofocus value="{{ old('jeniskelamin', $datapribadi->jeniskelamin) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="agama" class="labels">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" autofocus value="{{ old('agama', $datapribadi->agama) }}">
                            </div>
                            <div class="col-md-12">
                                <label for="dusun" class="labels">Dusun</label>
                                <input type="text" class="form-control" id="dusun" name="dusun" autofocus value="{{ old('dusun', $datapribadi->dusun) }}">
                            </div>
                            <div class="col-md-12"
                            ><label for="status" class="labels">Status</label>
                            <input type="text" class="form-control" id="status" name="status" autofocus value="{{ old('status', $datapribadi->status) }}">
                            </div>
                            <div class="col-md-12">
                            <label for="pekerjaan" class="labels">Pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" autofocus value="{{ old('pekerjaan', $datapribadi->pekerjaan) }}">
                            </div>
                            <div class="col-md-12">
                            <label for="notelpon" class="labels">Nomor Telpon</label>
                            <input type="text" class="form-control" id="notelpon" name="notelpon" autofocus value="{{ old('notelpon', $datapribadi->notelpon) }}">
                            </div>
                            <div class="col-md-12">
                            <label for="alamat" class="labels">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" autofocus value="{{ old('alamat', $datapribadi->alamat) }}">
                            </div>
                            <div class="col-md-12">
                            <label for="email" class="labels">Email</label>
                            <input type="email" class="form-control" id="email" name="email" autofocus value="{{ old('email', $datapribadi->email) }}">
                            </div>
                            <div class="col-md-12">
                            <label for="image" class="labels">image</label>
                            <input type="file" class="form-control" id="image" name="image" autofocus value="{{ old('image', $datapribadi->image) }}">
                            </div>
                            <div class="col-md-12">
                            <label for="password" class="labels">Password</label>
                            <input type="text" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="sumbit">Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        
    </form> 

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection

