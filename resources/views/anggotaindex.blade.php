@extends('masterindex')

@section('isifandori')
    <section class="slider_section">
        <div class="heading_container heading_center">
            <h3>
              LIST ANGGOTA BAND BANG DREAM!
            </h3><br>
          </div>
        <div class="slider_container">
            <div id="carouselBand" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                        @php
                          $count = 0;  
                        @endphp
                        @foreach ($data_anggota as $anggota)
                        <div class="carousel-item {{ $count == 0 ? 'active' : '' }}">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="detail-box">
                                            <h1>
                                                {{ $anggota->nama_anggota }}
                                            </h1>
                                            <h3>
                                                {{ $anggota->band }}
                                            </h3>
                                            <p>
                                                {{ $anggota->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="img-box">
                                            <img src="gambar/{{ $anggota->gambar_anggota }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $count+=1
                        @endphp 
                        @endforeach
                    </div>
                <a class="carousel-control-prev" href="#carouselBand" role="button" data-slide="prev" style="width: 2%;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselBand" role="button" data-slide="next" style="width: 2%;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
@endsection
