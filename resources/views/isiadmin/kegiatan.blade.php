@extends('layouts.admin')

@section('content')

<div class="row" style="margin-left: 150px">
  <div class="col-sm-6" style="justify-content: center;">
    <article class="single-blog">
      <div class="post-thumb" style="margin-top: 60px; margin-bottom: 50px">
        {{-- <a href=""><img src="{{ asset('storage/' . $daftarkegiatan->image) }}" alt=""></a> --}}

        {{-- jika masih local/offline maka folder public nya di tuliskan --}}
        {{-- <img src="{{ asset('storage/public/gambar-kegiatan/' . $daftarkegiatan->image) }}" width="600px"> --}}
        
        {{-- jika sudah online maka folder public nya di hapus --}}
        <img src="{{ asset('storage/gambar-kegiatan/' . $daftarkegiatan->image) }}" width="600px">   
      </div>
      <div class="post-content">
        <div class="entry-header text-center text-uppercase" style="margin-bottom: 50px;">							
          <h2>{{ $daftarkegiatan->judul }}</h2>
        </div>
        <div class="entry-content" style="margin-top: -36px; text-align: justify;">
          <p>{!! $daftarkegiatan->isi !!}</p>
        </div>
                    <a href="/kegiatan" style="font-size: 12px">Kembali Ke Halaman Daftar Proyek</a>
      </div>
    </article>
  </div>
</div>

@endsection