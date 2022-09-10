@extends('layouts.admin')

@section('content')

<div class="row">
  <div class="col-sm-6" style="margin-left: 20%; width:60%;">
    <article class="single-blog">
      <div class="post-thumb" style="margin-top: 60px; margin-left: -190px; margin-bottom: 50px">
        <a href=""><img src="{{ asset('storage/' . $daftarkegiatan->image) }}" alt=""></a>
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