@extends('master')

@section('konten')
<div class="container px-0">
    <div class="heading_container ">
      <h2 class="">
        EDIT ANGGOTA <br>{{ $data_anggota->nama_anggota }}
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
                <img src="gambar-fandori/edit.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('proses_edit_anggota') }}" method="post" enctype="multipart/form-data">
            @csrf
              <section class="base">
                @if(session('message_edit_anggota'))
                  <div class="alert alert-success">
                      {{session('message_edit_anggota')}}
                  </div>
            @endif
              <div>
                <input type="hidden" name="id" value="{{ $data_anggota->id }}"  />
              </div>
               <div>
                  <label>Nama Anggota</label>
                  <input type="text" name="nama_anggota" value="{{ $data_anggota->nama_anggota }}" autofocus="" required="" />
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
                 <textarea name="deskripsi" rows="4" cols="42">{{ $data_anggota->deskripsi }}</textarea>
                </div>
                <div>
                  <label>Gambar Anggota</label>
                 <img src="gambar/{{ $data_anggota->gambar_anggota }}" style="width: 120px;float: left;margin-bottom: 5px;">
                 <input type="file" name="gambar_anggota" />
                 <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar</i>
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