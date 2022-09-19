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
            
                  {{-- <img src="{{ asset('storage/gambar-perangkat/' . $daftarperangkat->image) }}" alt="Admin" class="rounded-circle" width="150">    --}}

                  {{-- jika masih local/offline maka folder public nya di tulis --}}
                  {{-- <img src="{{ asset('storage/public/gambar-perangkat/' . $daftarperangkat->image) }}" alt="Admin" class="rounded-circle" width="150"> --}}
                  
                  {{-- jika sudah online maka folder public nya dihapus --}}
                  <img src="{{ asset('storage/gambar-perangkat/' . $daftarperangkat->image) }}" alt="Admin" class="rounded-circle" width="200" height="200">             

                  {{-- <div class="mt-3">
                    <h4>{{ $daftarmasyarakat->nama }}</h4>
                    <p class="text-secondary mb-1">{{ $daftarmasyarakat->email }}</p>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarperangkat->nama }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Jabatan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarperangkat->jabatan }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nomor Telpon</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{ $daftarperangkat->notelpon }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

      </div>
  </div>

@endsection

{{-- @extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
      <div class="col-20">  
          <img src="{{ asset('storage/' . $daftarperangkat->image) }}" alt="">
          <p>{{ $daftarperangkat->nama }}</p>
          <p>{{ $daftarperangkat->jabatan }}</p>
          <p>{{ $daftarperangkat->notelpon }}</p>
          <a href="/perangkat">Kembali Ke Halaman Daftar Perangkat</a>
      </div>
  </div>
</div>

@endsection --}}
