<section id="about" class="about">
    @foreach ($abouts as $about)
        
    <div class="container">

        <div class="section-title">
            <h2>About</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                @foreach ($users as $user)
                    
                <img src="{{asset("storage/assets/img/profil/".$user->image)}}" class="img-fluid" alt="">
                @endforeach
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>UI/UX Designer &amp; Web Developer.</h3>
                <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore
                    magna aliqua.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$about->birthday}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$about->website}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$about->phone}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$about->city}}
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$about->age}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$about->degree}}</li>
                            <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$about->email}}
                            </li>
                            <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$about->freelance}}</li>
                        </ul>
                    </div>
                </div>
                <p>
                    {{$about->info}}
                </p>
            </div>
        </div>
        @endforeach
    </div>
</section>