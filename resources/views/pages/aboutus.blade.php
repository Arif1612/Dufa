<!-- ======= Header ======= -->

  @include('pages.partials.pageheader')

<!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
            @php
              $abouts = App\Models\About::where('status','0')->get();
            @endphp

            @foreach ($abouts as $item)
          <div class="col-lg-6">
            <img src="{{ asset('uploads/about/'.$item->image) }}" width="546px" height="410px" alt="Image">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>{{ $item->name }}</h3>
            <p class="fst-italic">
              {{ $item->title }}
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> Be together for betterment.</li>
            </ul>
            <p>
              {{ $item->details }}
            </p>

            @endforeach

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1298" data-purecounter-duration="1" class="purecounter"></span>
            <p>All Member</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="254" data-purecounter-duration="1" class="purecounter"></span>
            <p>Active Member</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="69" data-purecounter-duration="1" class="purecounter"></span>
            <p>Executive Member</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
            <p>Support Assistant</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('pages.partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('web/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('web/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('web/assets/js/main.js')}}"></script>

</body>

</html>