@extends('layouts.masyarakat')

@section('content')


 <form method="post" action="{{  route('datapribadi.update', $datapribadi->id)  }}" enctype="multipart/form-data">
        @method('put')
        @csrf 
            <div class="container rounded bg-white mt-5 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right" style="margin-top: -30px;">
                        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <label for="image">
                        {{-- <img class="rounded-circle mt-5" width="200px" height="200px" src="{{ asset('storage/' . $datapribadi->image) }}"> --}}
                        {{-- <img src="{{ asset('storage/public/gambar-user/' . $datapribadi->image) }}" class="img-fluid" style="height: 300px">  --}}
                  <img src="{{ asset('storage/gambar-user/' . $datapribadi->image) }}" alt="Admin" class="rounded-circle" width="300px" height="300px">             

                        
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
                                {{-- <div class="col-md-12">
                                    <label for="jeniskelamin" class="labels">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin" autofocus value="{{ old('jeniskelamin', $datapribadi->jeniskelamin) }}">
                                </div> --}}
                                <label for="jeniskelamin" class="form-label labels">Jenis Kelamin</label>
                                <select class="col-md-12 form-select mb-3" aria-label="Default select example" id="jeniskelamin" name="jeniskelamin">
                                  <option selected>Pilih</option>
                                  <option value="laki-laki">Laki-Laki</option>
                                  <option value="perempuan">Perempuan</option>
                                </select>
                                <label for="agama" class="form-label">Agama</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="agama" name="agama" >
                                    <option selected>Pilih</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                                {{-- <div class="col-md-12">
                                    <label for="agama" class="labels">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama" autofocus value="{{ old('agama', $datapribadi->agama) }}">
                                </div> --}}
                                {{-- <div class="col-md-12">
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
                                </div> --}}
                                <label for="dusun" class="form-label">Dusun</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="dusun" name="dusun" >
                                    <option selected>Pilih</option>
                                    <option value="kinali">Kinali</option>
                                    <option value="tulus">Tulus</option>
                                    <option value="suangking">Suangking</option>
                                    <option value="ikhlas">Ikhlas</option>
                                </select>
                    
                                <label for="status" class="form-label">Status Pernikahan</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="status" name="status" >
                                    <option selected>Pilih</option>
                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                                
                                <label for="pekerjaan" class="form-label">Status Pekerjaan</label>
                                <select class="form-select mb-3" aria-label="Default select example" id="pekerjaan" name="pekerjaan" >
                                    <option selected>Pilih</option>
                                    <option value="Pelajar">Pelajar</option>
                                    <option value="PNS">PNS</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Pedagang">Pedagang</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                </select>
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

{{-- <div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-lg-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Profile</label>
                  <input class="form-control" type="file" id="image" name="image">
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                      <label class="labels">Name</label>
                      <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="labels">Surname</label>
                      <input type="text" class="form-control" value="" placeholder="surname">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                      <label class="labels">Mobile Number</label>
                      <input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12">
                      <label class="labels">Address Line 1</label>
                      <input type="text" class="form-control" placeholder="enter address line 1" value="">
                    </div>
                    <div class="col-md-12">
                      <label class="labels">Address Line 2</label>
                      <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12">
                      <label class="labels">Postcode</label>
                      <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12">
                      <label class="labels">State</label>
                      <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12">
                      <label class="labels">Area</label>
                      <input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12">
                      <label class="labels">Email ID</label>
                      <input type="text" class="form-control" placeholder="enter email id" value="">
                    </div>
                    <div class="col-md-12"
                    ><label class="labels">Education</label>
                    <input type="text" class="form-control" placeholder="education" value="">
                  </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                      <label class="labels">Country</label>
                      <input type="text" class="form-control" placeholder="country" value="">
                    </div>
                    <div class="col-md-6">
                      <label class="labels">State/Region</label>
                      <input type="text" class="form-control" value="" placeholder="state">
                    </div>
                </div>
                <div class="mt-5 text-center">
                  <button class="btn btn-primary profile-button" type="button">Update Profile</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div> --}}

@endsection


