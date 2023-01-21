@extends('frontend.main')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid px-0 mb-5 col wow fadeIn" data-wow-delay="0.5s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="ASET/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png" alt="Image"  >
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="display-1 text-white mb-2" style="font-family: sans-serif; font-size:50px">Galeri</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Header End -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="ASET/x2/kyle-nieber-3ryX0ShTMWg-unsplash@2x.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="ASET/x2/smit-patel-dGMcpbzcq1I-unsplash@2x.png" class="d-block w-100" alt="...">
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Galeri</p>
            </div>
            <div class="row">
              @foreach ($galeri as $foto)
                <div class="col-sm-12 col-md-6 col-lg-3  py-3">
                    <div class="box-galery">
                        <img src="{{ asset('storage/'.$foto->image) }}" alt="">
                    </div>
               </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery End -->

@endsection
