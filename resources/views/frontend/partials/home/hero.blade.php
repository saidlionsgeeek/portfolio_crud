@foreach ($users as $user)
    <section id="hero"
        style="background: url('{{ asset('storage/assets/img/cover/' . $user->image_cover) }}') top center ;
        width: 100%;height: 100vh;background-size: cover;"
        class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>{{ $user->name }}</h1>
            <p>I'm <span class="typed"
                    data-typed-items="{{ $user->skil_one }}, {{ $user->skil_two }}, {{ $user->three }}, {{ $user->four }}"></span>
            </p>
        </div>
    </section>
@endforeach
