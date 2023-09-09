@foreach ($skills as $skill )
<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Skills</h2>
            <p>{{$skill->info}}</p>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6" data-aos="fade-up">

                <div class="progress">
                    <span class="skill">{{$skill->skill1}} <i class="val">{{$skill->n1}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->n1}}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{$skill->skill2}} <i class="val">{{$skill->n2}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->n2}}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{$skill->skill3}} <i class="val">{{$skill->n3}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->n3}}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                <div class="progress">
                    <span class="skill">{{$skill->skill4}} <i class="val">{{$skill->n4}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->n4}}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{$skill->skill5}}<i class="val">{{$skill->n5}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->n5}}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

                <div class="progress">
                    <span class="skill">{{$skill->skill6}} <i class="val">{{$skill->n6}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->n6}}" aria-valuemin="0"
                            aria-valuemax="100"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @endforeach
</section>
    