<header id="header">
    @foreach ($users as $user )
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="{{asset("storage/assets/img/profil/".$user->image)}}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">{{$user->name}}</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{$user->twitter}}" target="_blanc" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{$user->facebook}}" target="_blanc" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{$user->instagram}}" target="_blanc" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{$user->skype}}" target="_blanc" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="{{$user->linkdin}}" target="_blanc" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active back-to-home"><a href="#" ><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
    @endforeach
</header><!-- End Header -->
