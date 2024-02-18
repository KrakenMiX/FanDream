@extends('masterindex')

@section('isifandori')
    <section class="slider_section">
        <div class="heading_container heading_center">
            <h3>
              LIST BAND BANG DREAM!
            </h3><br>
          </div>
        <div class="slider_container">
            <div id="carouselBand" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                        @foreach ($data_band as $band)
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="detail-box">
                                            <h1>
                                                {{ $band->nama_band }}
                                            </h1>
                                            <p>
                                                {{ $band->deskripsi }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="img-box">
                                            <img src="gambar/{{ $band->gambar_band }}" alt="" />
                                        </div>
                                    </div>
                                    <div>
                                        <h1>---------------------------------------------</h1>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
