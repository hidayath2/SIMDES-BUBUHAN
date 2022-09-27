@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-sm-6" style="margin-left: 20%; width:60%;">
    <article class="single-blog">
      <center>
      <div class="post-thumb" style="margin-top: 60px; margin-bottom: 50px">
        <a href="">
          {{-- <img src="{{ asset('storage/' . $daftarproyek->image) }}" alt=""> --}}

          {{-- jika masih local/offline maka folder public nya di tuliskan --}}
          {{-- <img src="{{ asset('storage/public/gambar-proyek/' . $daftarproyek->image) }}">   --}}
          
          {{-- jika sudah online folder publicnya di hapus --}}
          <img src="{{ asset('storage/gambar-proyek/' . $daftarproyek->image) }}" width="600px">   
        </a>
      </div>
    </center>
      <div class="post-content">
        <div class="entry-header text-center text-uppercase" style="margin-bottom: 50px;">							
          <h2>{{ $daftarproyek->judul }}</h2>
        </div>
        <div class="entry-content" style="margin-top: -36px; text-align: justify;">
          <p>{!! $daftarproyek->isi !!}</p>
        </div>
          <a href="/proyek" style="font-size: 12px">Kembali Ke Halaman Daftar Kegiatan</a>
      </div>
    </article>
  </div>
</div>

@endsection