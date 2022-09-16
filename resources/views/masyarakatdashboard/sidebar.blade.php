<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    {{-- <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-3">Masyarakat</sup></div>
    </a> --}}

    <li class="nav-item mt-4">
        <a class="nav-link" href="/datapribadi">
            <i class="bi bi-people-fill"></i>
            <span>Data Diri</span>
        </a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link" href="/proyekmasyarakat">
            <i class="bi bi-clipboard2-data-fill"></i>
            <span>Proyek</span>
        </a>
    </li> --}}
    
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-file-earmark-text-fill"></i>
            <span>Pelayanan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-3 collapse-inner rounded">
                <a class="collapse-item" data-toggle="modal" data-target="#rps" href="{{ route('rps') }}">Rekomendasi Proposal</a>
                <a class="collapse-item" data-toggle="modal" data-target="#sktm" href="{{ route('sktm') }}">Surat Keterangan Tidak Mampu</a>
                <a class="collapse-item" data-toggle="modal" data-target="#sp" href="{{ route('sp') }}">Surat Pindah</a>
                {{-- <a class="collapse-item" data-toggle="modal" data-target="#rps" href="{{ route('spn') }}">Surat Pengantar Nikah</a> --}}
                <a class="collapse-item" data-toggle="modal" data-target="#skm" href="{{ route('skm') }}">Surat Keterangan Kematian</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skbmr" href="{{ route('skbmr') }}">Surat Keterangan Belum Memiliki Rumah</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skh" href="{{ route('skh') }}">Surat Keterangan Hilang</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skbm" href="{{ route('skbm') }}">Surat Keterangan Belum Menikah</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skj" href="{{ route('skj') }}">Surat Keterangan Janda</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skpot" href="{{ route('skpot') }}">Surat Keterangan Pekerjaan Orang Tua</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skn" href="{{ route('skn') }}">Surat Keterangan Nama</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skkir" href="{{ route('skkir') }}">Surat Keterangan KIR</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skkip" href="{{ route('skkip') }}">Surat Keterangan Rekomendasi KIP</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skskck" href="{{ route('skskck') }}">Surat Keterangan Rekomendasi SKCK</a>
                <a class="collapse-item" data-toggle="modal" data-target="#skbb" href="{{ route('skbb') }}">Surat Keterangan Berkelakuan Baik</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">

    {{-- modal rekomendasi proposal --}}
    <div class="modal fade" id="rps" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Rekomendasi Proposal</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="container">
                <form method="post" action="{{ route('surat.store') }}">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="rps">
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tanggalpermohonan" class="form-label">Tanggal Permohonan</label>
                        <input type="date" class="form-control" id="tanggalpermohonan" name="tanggalpermohonan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="prihalpermohonan" class="form-label">Prihal Permohonan</label>
                        <input type="text" class="form-control" id="prihalpermohonan" name="prihalpermohonan">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tujuanpermohonan" class="form-label">Tujuan Permohonan</label>
                        <input type="text" class="form-control" id="tujuanpermohonan" name="tujuanpermohonan">
                    </div>
            
                    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            
                </form>
            </div>
            </div>
        </div>
    </div>

    {{-- modal surat keterangan tidak mampu --}}
    <div class="modal fade" id="sktm" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Tidak Mampu</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="container">
            <form action="{{ route('surat.store') }}" method="post">
                @csrf 
                <input type="hidden" name="jenis_surat" value="sktm">
                <div class="mb-3">
                    <label for="keperluan" class="form-label">keperluan</label>
                    <input type="text" class="form-control" id="keperluan" name="keperluan">
                </div>
        
                <button type="submit" class="btn btn-primary mb-3">Kirim</button>
        
            </form>
            </div>
            </div>
        </div>
    </div>

    {{-- surat keterangan pindah --}}
    <div class="modal fade" id="sp" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Pindah</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              <div class="container">
                <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                  @csrf 
                  <input type="hidden" name="jenis_surat" value="sp">
                  <div class="mb-3">
                      <label for="kepalakeluarga" class="form-label">Nama Kepala Keluarga</label>
                      <input type="text" class="form-control" id="kepalakeluarga" name="kepalakeluarga">
                  </div>
                  
                  <div class="mb-3">
                    <label for="alamattujuan" class="form-label">Alamat Tujuan </label>
                    <input type="text" class="form-control" id="alamattujuan" name="alamattujuan">
                  </div>
                  
                  <div class="mb-3">
                    <label for="jumlahorangyangpindah" class="form-label">Jumlah Orang Yang Pindah</label>
                    <input type="text" class="form-control" id="jumlahorangyangpindah" name="jumlahorangyangpindah">
                  </div>
          
                  <button type="submit" class="btn btn-primary mb-3">Kirim</button>
          
              </form>
            </div>
            </div>
        </div>
    </div>

    {{-- surat keteragan kematian --}}
    <div class="modal fade" id="skm" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Kematian</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="jenis_surat" value="skm">
                        <div class="mb-3">
                            <label for="namaorangyangmeninggal" class="form-label">Nama Orang Yang Meninggal</label>
                            <input type="text" class="form-control" id="namaorangyangmeninggal" name="namaorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamatlahirorangyangmeninggal" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="alamatlahirorangyangmeninggal" name="alamatlahirorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggallahirorangyangmeninggal" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallahirorangyangmeninggal" name="tanggallahirorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="kewarganegaraanorangyangmeninggal" class="form-label">Kewarganegaraan Orang yang meninggal</label>
                            <input type="text" class="form-control" id="kewarganegaraanorangyangmeninggal" name="kewarganegaraanorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="alamatorangyangmeninggal" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamatorangyangmeninggal" name="alamatorangyangmeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="harimeninggal" class="form-label">Hari Kematian</label>
                            <input type="text" class="form-control" id="harimeninggal" name="harimeninggal">
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggalmeninggal" class="form-label">Tanggal Kematian</label>
                            <input type="date" class="form-control" id="tanggalmeninggal" name="tanggalmeninggal">
                        </div>
                
                        <div class="mb-3">
                            <label for="notelpon" class="form-label">Nomor Telpon Whatsapp</label>
                            <input type="text" class="form-control" id="notelpon" name="notelpon">
                        </div>
                
                        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>    

    {{-- surat keterangan belum memiliki rumah --}}
    <div class="modal fade" id="skbmr" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Belum Memiliki Rumah</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                  <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="skbmr">
                    <div class="mb-3">
                        <label for="pemberibantuan" class="form-label">Pemberi Bantuan</label>
                        <input type="text" class="form-control" id="pemberibantuan" name="pemberibantuan">
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                </form> 
                </div>
            </div>
        </div>
    </div>

    {{-- modal surat keterangan hilang --}}
    <div class="modal fade" id="skh" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan hilang</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                  <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="skh">
                    <div class="mb-3">
                        <label for="deskripsibaranghilang" class="form-label">Deskripsi Barang Yang Hilang</label>
                        <input type="text" class="form-control" id="deskripsibaranghilang" name="deskripsibaranghilang">
                    </div>
                    
                    {{-- <div class="mb-3">
                        <label for="tujuanpermohonan" class="form-label">Tujuan Surat</label>
                        <input type="text" class="form-control" id="tujuanpermohonan" name="tujuanpermohonan">
                    </div> --}}
            
                    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal surat keterangan belom menikah --}}
    <div class="modal fade" id="skbm" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Belum Menikah</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                  <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="skbm">
            
                    <button type="submit" class="btn btn-primary mb-4 mt-3">Minta Surat</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal surat keterangan janda --}}
    <div class="modal fade" id="skj" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Janda</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="jenis_surat" value="skj">
                        <div class="mb-3">
                            <label for="tanggalstatusjanda" class="form-label">Tanggal Status Janda</label>
                            <input type="date" class="form-control" id="tanggalstatusjanda" name="tanggalstatusjanda">
                        </div>
                
                        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal surat keterangan pekerjaan orang tua --}}
    <div class="modal fade" id="skpot" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Pekerjaan Orang Tua</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                  <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="skport">
                    <div class="mb-3">
                        <label for="namaayah" class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" id="namaayah" name="namaayah">
                    </div>
                    
                    <div class="mb-3">
                        <label for="nikayah" class="form-label">NIK Ayah</label>
                        <input type="text" class="form-control" id="nikayah" name="nikayah">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tempatlahirayah" class="form-label">Tempat Lahir Ayah</label>
                        <input type="text" class="form-control" id="tempatlahirayah" name="tempatlahirayah">
                    </div>
                    
                    <div class="mb-3">
                        <label for="tanggallahirayah" class="form-label">Tanggal Lahir Ayah</label>
                        <input type="date" class="form-control" id="tanggallahirayah" name="tanggallahirayah">
                    </div>
                    
                    <label for="agamaayah" class="form-label">Agama Ayah</label>
                    <select class="form-select mb-3" aria-label="Default select example" id="agamaayah" name="agamaayah" >
                        <option selected>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select> 
            
                    <div class="mb-3">
                        <label for="pekerjaanayah" class="form-label">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" id="pekerjaanayah" name="pekerjaanayah">
                    </div>
            
                    <div class="mb-3">
                        <label for="kewarganegaraanayah" class="form-label">Kewarganegaraan Ayah</label>
                        <input type="text" class="form-control" id="kewarganegaraanayah" name="kewarganegaraanayah">
                    </div>
            
                    <div class="mb-3">
                        <label for="alamatayah" class="form-label">Alamat Ayah</label>
                        <input type="text" class="form-control" id="alamatayah" name="alamatayah">
                    </div>
                           
                    <div class="mb-3">
                      <label for="namaibu" class="form-label">Nama Ibu</label>
                      <input type="text" class="form-control" id="namaibu" name="namaibu">
                    </div>
                           
                    <div class="mb-3">
                      <label for="nikibu" class="form-label">NIK Ibu</label>
                      <input type="text" class="form-control" id="nikibu" name="nikibu">
                    </div>
                           
                    <div class="mb-3">
                      <label for="tempatlahiribu" class="form-label">Tempat Lahir Ibu</label>
                      <input type="text" class="form-control" id="tempatlahiribu" name="tempatlahiribu">
                    </div>
                           
                    <div class="mb-3">
                      <label for="tanggallahiribu" class="form-label">Tanggal Lahir Ibu</label>
                      <input type="date" class="form-control" id="tanggallahiribu" name="tanggallahiribu">
                    </div>
                           
                    <label for="agamaibu" class="form-label">Agama Ibu</label>
                    <select class="form-select mb-3" aria-label="Default select example" id="agamaibu" name="agamaibu" >
                        <option selected>Pilih</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select> 
                    
                    <div class="mb-3">
                      <label for="pekerjaanibu" class="form-label">Pekerjaan Ibu</label>
                      <input type="text" class="form-control" id="pekerjaanibu" name="pekerjaanibu">
                    </div>
                    
                    <div class="mb-3">
                      <label for="kewarganegaraanibu" class="form-label">Kewarganegaraan ibu</label>
                      <input type="text" class="form-control" id="kewarganegaraanibu" name="kewarganegaraanibu">
                    </div>
                   
                    <div class="mb-3">
                      <label for="alamatibu" class="form-label">Alamat ibu</label>
                      <input type="text" class="form-control" id="alamatibu" name="alamatibu">
                    </div>
            
                    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            
                  </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal surat keterangan nama --}}
    <div class="modal fade" id="skn" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Nama</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="jenis_surat" value="skn">
                        <div class="mb-3">
                            <label for="namayangberbeda" class="form-label">Nama Lain Atau Nama Yang Berbeda</label>
                            <input type="text" class="form-control" id="namayangberbeda" name="namayangberbeda">
                        </div>
                        
                        <div class="mb-3">
                            <label for="tempatnamayangberbeda" class="form-label">Letak Nama Yang Berbeda</label>
                            <input type="text" class="form-control" id="tempatnamayangberbeda" name="tempatnamayangberbeda">
                        </div>
                        
                        <div class="mb-3">
                            <label for="tanggalnamayangberbeda" class="form-label">Tanggal Nama Yang Berbeda</label>
                            <input type="date" class="form-control" id="tanggalnamayangberbeda" name="tanggalnamayangberbeda">
                        </div>
                
                        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>    

    {{-- modal surat keterangan kir --}}
    <div class="modal fade" id="skkir" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Keterangan KIR</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                        <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                            @csrf 
                            <input type="hidden" name="jenis_surat" value="skkir">     
                            <div class="mb-3">
                                <label for="keperluan" class="form-label">Keperluan</label>
                                <input type="text" class="form-control" id="keperluan" name="keperluan">
                            </div>
                    
                            <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                    
                        </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal surat keterangan kip --}}
    <div class="modal fade" id="skkip" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Rekomendasi KIP</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="jenis_surat" value="skkip">
                        <div class="mb-3">
                            <label for="tanggalpermohonan" class="form-label">Tanggal Permohonan Surat</label>
                            <input type="date" class="form-control" id="tanggalpermohonan" name="tanggalpermohonan">
                        </div>
                
                        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal rekomendasi skck --}}
    <div class="modal fade" id="skskck" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Rekomendasi SKCK</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                  <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="skskck">
                    <div class="mb-3">
                        <label for="keperluan" class="form-label">Keperluan Surat</label>
                        <input type="text" class="form-control" id="keperluan" name="keperluan">
                    </div>
            
                    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            
                  </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal surat berkelakuan baik --}}
    <div class="modal fade" id="skbb" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><b>Surat Keterangan Berkelakuan Baik</b></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                  <form method="post" action="{{ route('surat.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <input type="hidden" name="jenis_surat" value="skbb">
                    <div class="mb-3">
                        <label for="keperluan" class="form-label">Keperluan</label>
                        <input type="text" class="form-control" id="keperluan" name="keperluan">
                    </div>
            
                    <button type="submit" class="btn btn-primary mb-3">Kirim</button>
            
                  </form>
                </div>
            </div>
        </div>
    </div>
        

    {{-- @can('isAdmin') --}}
        
    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Tata Kelola</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/proyek">Proyek</a>
                <a class="collapse-item" href="/kegiatan">Kegiatan</a>
                <a class="collapse-item" href="/perangkat">Perangkat</a>
            </div>
        </div>
    </li> --}}
    {{-- @endcan --}}


    <!-- Divider -->
    {{-- <hr class="sidebar-divider"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->