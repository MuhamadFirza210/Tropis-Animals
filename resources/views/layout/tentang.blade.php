@extends('frontend.home')
@section('konten')

    <div class="container-fluid px-0 mb-5 col wow fadeIn" data-wow-delay="0.5s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="ASET/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png" alt="Image"  >
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="display-1 text-white mb-2" style="font-family: sans-serif; font-size:50px">Tentang Kami</p>
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



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row ">
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
                        <div class="col-12">
                            <img class=" img-fluid rounded w-100" src="ASET/x1/buaya.png">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="">Tropisanimal</h1>
                    <p class="">{{ $dataartikel-> title }}</p>
                    <p class="">{{ $dataartikel-> subtitle }}</p>
                    <p class="">{{ $dataartikel-> bodysingkat }}</p>
                </div>
            </div>
<br>
<br>
                @foreach ($visimisi as $vm )
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">{{ $vm->visi }}</h1>
                    <p class="card-text">{{ $vm->visibody }}</p>
                    <h1 class="mb-4">{{ $vm->misi }}</h1>
                    <p class="mb-4">{{ $vm->misibody }}</p>
                </div>
                @endforeach
        </div>
    </div>
    @endsection

