@extends('frontend.main')
@section('content')

<!-- Carousel Start -->
<div class="container-fluid px-0 mb-5 col wow fadeIn" data-wow-delay="0.5s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="margin-top: -100px">
            <div class="carousel-item active">
                <img class="w-100" src="ASET/x2/juliana-castro-LdEZjO3wjqQ-unsplash@2x.png" alt="Image"  >
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8 text-start">
                                <p class="display-1 text-white mb-2" style="font-family: sans-serif; font-size:50px">Hewan</p>
                                <p class="display-2 text-white mb-2" style="font-family: sans-serif; font-size:50px">Tropis di Dunia</p>
                                <p class="display-3 text-white mb-2" style="font-family: sans-serif; font-size:20px">hewan tropis adalah spesies yang hidup di daerah tropis tersebut. Istilah tropis juga kadang-kadang digunakan untuk merujuk pada tempat yang hangat dan lembab sepanjang tahun, meskipun tidak terletak di antara dua garis balik.</p>
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
<!-- Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 wow fadeIn mb-3" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="ASET/x2/david-clode-0lwa8Dprrzs-unsplash@2x.png">
                        </div>

                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class=" img-fluid rounded" src="ASET/x2/dawn-armfield-84n7c9cLEKM-unsplash@2x.png">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" data-wow-delay="0.5s">
                            <img class=" img-fluid rounded w-100" src="ASET/x1/buaya.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">Tentang Kami</p>
                    <h1 class="mb-4" style="font-family: sans-serif">{{ $dataartikel-> title }}</h1>
                    <p class="mb-4">{{ $dataartikel-> subtitle }}</p>
                    <p class="mb-4">{{ $dataartikel->  bodysingkat}}</p>
                    <a class="btn btn-success    rounded-pill py-3 px-5" href="/tentang">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

    <div class="form-1" style="background: url('ASET/x1/juliana-castro-LdEZjO3wjqQ-unsplash.png'); background-size: cover; height: auto">
        <div class="container">
            <div class="row">
                <div class="container-fluid pt-5 ">
                    <div class="container py-5 content-overlay">
                        <div class="d-flex flex-column text-center mb-5">
                            <button class="btn rounded-circle circle"></button>
                            <h1 class="display-5 m-0 white text-white" style="font-family: sans-serif">Kami Membawa Anda</h1>
                            <h1 class="display-5 m-0 white text-white" style="font-family: sans-serif">Untuk Mengetahui Lebih Dalam</h1>
                        </div>
                        <div class="row pb-4">

                            <!-- ABOUT 1 START -->
                            <div class="col-md-6 col-lg-3 mb-4 container">
                                <div class="card pt-3" style="height: 22rem">
                                    <div class="card-body">
                                        <div class="d-flex flex-column text-center bg-white">
                                            <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                                            <h3 class="" ><i class="fa-solid fa-paw h3" style="color:green"></i></h3>
                                            <h3 class="mb-2" >Tropis</h3>
                                            <p>Tropis merupakan iklim dengan suhu rata-rata di atas 18 derajat celcius dan curah hujannya cukup besar selama setidaknya setengah tahun.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ABOUT  END -->

                            <!-- ABOUT 2 START -->
                            <div class="col-md-6 col-lg-3 mb-4 container">
                                <div class="card pt-3" style="height: 22rem">
                                    <div class="card-body">
                                        <div class="d-flex flex-column text-center bg-white">
                                            <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                                            <h3 class=""><i class="fa-solid fa-paw h3" style="color:green"></i></h3>
                                            <h3 class="mb-2">Tropis</h3>
                                            <p>Tropis merupakan iklim dengan suhu rata-rata di atas 18 derajat celcius dan curah hujannya cukup besar selama setidaknya setengah tahun.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ABOUT 2 END -->

                            <!-- ABOUT 3 START -->
                            <div class="col-md-6 col-lg-3 mb-4 container">
                                <div class="card pt-3" style="height: 22rem">
                                    <div class="card-body">
                                        <div class="d-flex flex-column text-center bg-white">
                                            <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                                            <h3 class=""><i class="fa-solid fa-paw h3" style="color: green"></i></h3>
                                            <h3 class="mb-2">Tropis</h3>
                                            <p>Tropis merupakan iklim dengan suhu rata-rata di atas 18 derajat celcius dan curah hujannya cukup besar selama setidaknya setengah tahun.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ABOUT 3 END -->

                            <!-- ABOUT 4 START -->
                            <div class="col-md-6 col-lg-3 mb-4 container">
                                <div class="card pt-3" style="height: 22rem">
                                    <div class="card-body">
                                        <div class="d-flex flex-column text-center bg-white">
                                            <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                                            <h3 class=""><i class="fa-solid fa-paw h3" style="color: green"></i></h3>
                                            <h3 class="mb-2">Tropis</h3>
                                            <p>Tropis merupakan iklim dengan suhu rata-rata di atas 18 derajat celcius dan curah hujannya cukup besar selama setidaknya setengah tahun.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ABOUT 4 END -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
        <p class="section-title bg-white text-start text-primary pe-3">BERITA</p>
        <h1 class="mb-4" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Baca Berita Terbaru Kami Dalam Tropisianimal</h1>
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
    <!-- Banner End -->

    <!-- Gambar Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Galery</p>
                <h1 class="mb-5" style="font-family: sans-serif; font-weight:bold">Lihat lebih banyak Hewan Tropis Pada Galery Kami</h1>
            </div>
            <div class="abs">
                @foreach ($galeri as $foto)
                <div>
                <img src="{{ asset('storage/'.$foto->image) }}" alt="" class="img-fluid w-100" style="height: 230px">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @endsection

