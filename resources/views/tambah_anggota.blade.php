@extends('master')

@section('konten')
<div class="container px-0">
    <div class="heading_container ">
      <h2 class="">
        INPUT DATA ANGGOTA BAND
      </h2>
      <a href="{{ route('anggota') }}"><- &nbsp; Kembali</a>
    </div>
  </div>
<section class="contact_section ">
    <div class="container container-bg"> 
      <div class="row"> 
        <div class="col-lg-7 col-md-5 px-0">
          <div class="img_container">
            <div class="img-box">
                <img src="gambar-fandori/tambah.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('proses_tambah_anggota') }}" method="post" enctype="multipart/form-data">
            @csrf
              <section class="base">
                @if(session('message_tambah_anggota'))
                  <div class="alert alert-success">
                      {{session('message_tambah_anggota')}}
                  </div>
            @endif
               <div>
                  <label>Nama Anggota</label>
                  <input type="text" name="nama_anggota" autofocus="" required="" />
                </div>
                <div>
                  <label>Band</label><i style="float: left">
                  <select name="band" class="select-band" autofocus="" required="">
                    <option>Poppin Party</option>
                    <option>Afterglow</option>
                    <option>Roselia</option>
                    <option>Pastel Palettes</option>
                    <option>Hello Happy World</option>
                    <option>Raise A Suilen</option>
                    <option>Morfonica</option>
                    <option>MyGO!!!</option>
                    <option>Ave Mujica</option>
                  </select></i>
                </div>
                <div>
                  <label>Deskripsi</label>
                 <textarea name="deskripsi" rows="4" cols="42"></textarea>
                </div>
                <div>
                  <label>Gambar Anggota</label>
                 <input type="file" name="gambar_anggota" required="" />
                </div>
              </section>
            <div class="d-flex ">
              <button type="submit">
                KIRIM
              </button> 
            </div> 
          </form>
        </div>
      </div>
    </div>
  </section>

  @endsection