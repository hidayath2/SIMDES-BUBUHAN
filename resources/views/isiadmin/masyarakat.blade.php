@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="main-body">
        <!-- /Breadcrumb -->
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  {{-- <img src="{{ asset('storage/' . $daftarmasyarakat->image) }}" alt="Admin" class="rounded-circle" width="150"> --}}

                  {{-- jika masih local/offline maka pulic nya harus ditulis --}}
                  {{-- <img src="{{ asset('storage/public/gambar-user/' . $daftarmasyarakat->image) }}">    --}}

                  {{-- jika sudah online maka public nya di hapus --}}
                  <img src="{{ asset('storage/gambar-user/' . $daftarmasyarakat->image) }}" class="rounded-circle" width="200" height="200">    
                  <div class="mt-3">
                    <h4>{{ $daftarmasyarakat->nama }}</h4>
                    <p class="text-secondary mb-1">{{ $daftarmasyarakat->email }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->nik }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NO KK</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->nokk }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tempat Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->tempatlahir }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->getFullTanggalLahir() }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->jeniskelamin }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Agama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->agama }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Dusun</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->dusun }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status Pernikahan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->status }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status Pekerjaan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->pekerjaan }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nomor Telpon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->notelpon }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarmasyarakat->alamat }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

      </div>
</div>

@endsection