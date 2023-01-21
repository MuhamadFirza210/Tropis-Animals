@extends('frontend.main')
@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5 col wow fadeIn" data-wow-delay="0.5s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="ASET/x2/juliana-castro-LdEZjO3wjqQ-unsplash@2x.png" alt="Image"  >
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="display-1 text-white mb-2" style="font-family: sans-serif; font-size:50px">Berita</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-lg-6">
                    <div class="row g-5">
                        <div class="col-6 wow  fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="ASET/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png.png">
                        </div>
                        <div class="col-lg-6 wow fadeIn gy-5" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="ASET/x2/ronald-gijezen-7h06P9UKhYY-unsplash@2x.png">
                        {{-- </div>
                        <div class="col-6 wow fadeIn"> --}}
                            <img class="img-fluid rounded mt-5" src="ASET/x2/david-clode-AtCChdVhAmA-unsplash@2x.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">Berita</p>
                    <h1 class="mb-4">{{ $dataartikel->title }}</h1>
                    <p class="card-text">{{ $dataartikel->subtitle }}</p>
                    <p class="card-text">{{ $dataartikel->bodysingkat }}</p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <p class="section-title bg-white text-start text-primary pe-3">BERITA</p>
        <h1 class="mb-4">Baca Berita Terbaru Kami Dalam Tropisianimal</h1>
    </div>
    <!-- Banner Start -->
    <div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="ASET/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png">
        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              @foreach ($berita as $data)


                <div class="col">
                    <a href="/beritaa/{{ $data['slug'] }}">
                  <div class="card h-100">
                    <img src="{{ asset('storage/'.$data->image) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $data->title }}</h5>
                      <p class="card-text">{{ $data->bodysingkat     }}</p>
                    </div>
                </a>
                  </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
@endsection
