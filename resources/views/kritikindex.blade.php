@extends('masterindex')

@section('isifandori')
    
<section class="contact_section layout_padding">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          ADA SARAN DAN KRITIK? KIRIM DISINI
        </h2>
      </div>
    </div>
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
            @if(session('message_kritik'))
            <div class="alert alert-success">
                {{session('message_kritik')}}
            </div>
            @endif
            <form action="{{route('actionkritik')}}" method="post">
            @csrf
            <div>
              <input type="text" name="nama_kritik" placeholder="Nama" />
            </div>
            <div>
              <input type="email" name="email" placeholder="Email"/>
            </div>
            <div>
              <input type="text" name="no_tlp" placeholder="Nomor Telepon"/>
            </div>
            <div>
              <input type="text" class="message-box" name="pesan" placeholder="Pesan"/>
            </div>
            <div class="d-flex ">
              <button>
                KIRIM
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

@endsection