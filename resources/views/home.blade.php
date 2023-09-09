@extends('layouts.indexfront')
@section('content')
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    <!-- ======= Header ======= -->
    @include('frontend.partials.home.header')

    <!-- ======= Hero Section ======= -->
    @include("frontend.partials.home.hero")
    <!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        @include("frontend.partials.home.about")
        <!-- End About Section -->

        <!-- ======= Facts Section ======= -->

        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        @include("frontend.partials.home.skills")
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->

        <!-- ======= Portfolio Section ======= -->
        @include("frontend.partials.home.Portfolio")
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->

        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        
        <!-- End Testimonials Section -->
        @include("frontend.partials.home.testimonials")
        <!-- ======= Contact Section ======= -->
        @include("frontend.partials.home.contact")
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>iPortfolio</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection
