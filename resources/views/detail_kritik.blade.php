@extends('master')

@section('konten')
<div class="container px-0">
    <div class="heading_container ">
      <h2 class="">
        DETAIL KRITIK <br>{{ $data_kritik->nama_kritik }}
      </h2>
    </div>
  </div>
<section class="contact_section ">
    <div class="container container-bg"> 
      <div class="row">
        <div class="col-lg-7 col-md-5 px-0">
          <div class="img_container">
            <div class="img-box">
                <img src="gambar-fandori/kritik_toyama3.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 px-0">
            <form action="{{ route('kritik') }}" method="get" enctype="multipart/form-data">
            @csrf
              <section class="base">
                <div>
                  <label>Nama User</label>
                  <input type="text" name="nama_kritik" value="{{ $data_kritik->nama_kritik }}" autofocus="" required="" readonly/>
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $data_kritik->email }}" autofocus="" required="" readonly/>
                </div>
                <div>
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_tlp" value="{{ $data_kritik->no_tlp }}" autofocus="" required="" readonly/>
                </div>
                <div>
                  <label>Pesan</label>
                 <textarea name="pesan" rows="4" cols="42" readonly>{{ $data_kritik->pesan }}</textarea>
                </div>
              </section>
            <div class="d-flex ">
              <button type="submit">
                KEMBALI
              </button> 
            </div> 
          </form>
        </div>
      </div>
    </div>
  </section>

  @endsection