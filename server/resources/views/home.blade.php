@extends('layouts.master_home')
@include('layouts.body.slider')

@section('home_content')
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About Us</strong></h2>
    </div>

    <div class="row content">
      <div class="col-lg-6" data-aos="fade-right">
        <h2>{{ $abouts->title }}</h2>
        <h3>{{ $abouts->short_dis }}</h3>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
        <p>
          {{ $abouts->long_dis }}
        </p>
      </div>
    </div>
  </div>
</section><!-- End About Us Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Services</strong></h2>
      <p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bxl-dribbble"></i>
          </div>
          <h4><a href="">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-orange ">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-file"></i>
          </div>
          <h4><a href="">Sed Perspiciatis</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-pink">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-tachometer"></i>
          </div>
          <h4><a href="">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-yellow">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-layer"></i>
          </div>
          <h4><a href="">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="icon-box iconbox-red">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-slideshow"></i>
          </div>
          <h4><a href="">Dele Cardo</a></h4>
          <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="icon-box iconbox-teal">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
            </svg>
            <i class="bx bx-arch"></i>
          </div>
          <h4><a href="">Divera Don</a></h4>
          <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2>Portfolio</h2>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="col-lg-12 d-flex justify-content-center">

      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up">
      @foreach($images as $img)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{ $img->image }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="{{ $img->image }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"></a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Our Clients Section ======= -->
<section id="clients" class="clients">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Brands</h2>
    </div>

    <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
      @foreach($brands as $brand)
      <div class="col-lg-3 col-md-4 col-6">
        <div div class="client-logo">
          <img src="{{ $brand->brand_image }}" class="img-fluid" alt="">
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Our Clients Section -->
@endsection
