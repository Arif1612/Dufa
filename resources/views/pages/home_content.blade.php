@extends('welcome')
@section('content')

  <!-- ======= Services Section ======= -->
  <section class="services">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bx-credit-card"></i></div>
            <h4 class="title"><a href="">DUFA Membership Card</a></h4>
            <p class="description">DUFA registered members get membership card at free cost.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
            <div class="icon"><i class="bx bx-home-smile"></i></div>
            <h4 class="title"><a href="">Events Entrance</a></h4>
            <p class="description">Different events are organized by DUFA in every year. Only DUFA members are allowed into those events.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bx-donate-blood"></i></div>
            <h4 class="title"><a href="">Blood Donation</a></h4>
            <p class="description">DUFA members help each other by donating blood on emergency medical situation.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
          <div class="icon-box icon-box-pink">
            <div class="icon"><i class="bx bx-book-add"></i></div>
            <h4 class="title"><a href="">Children Educare</a></h4>
            <p class="description">We take care of our friends family who died. We assure their children good education.</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="{{ asset('web/assets/img/2.jpg')}}" class="img-fluid" alt="">
          <a href="https://www.youtubetrimmer.com/view/?v=F6aIxbkhy_o&start=6&end=96" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx bx-world"></i></div>
            <h4 class="title"><a href="">Mission</a></h4>
            @php
$data= App\Models\Mission::where('status','0')->get();
@endphp

@foreach ($data as $show)




            <p class="description">{{$show->mdetails}}</p>
          </div>

          <div class="icon-box">
            <div class="icon"><i class="bx bxl-dribbble"></i></div>
            <h4 class="title"><a href="">Vision</a></h4>
            <p class="description">{{$show->vdetails}}</p>
          </div>
@endforeach
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

@endsection