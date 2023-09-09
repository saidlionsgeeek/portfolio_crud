@extends("layouts.indexbackend")
@section("content")
@foreach ($homes as $home )
@include("backend.partials.admin.home")
@endforeach
@foreach ($abouts as $about)
    @include("backend.partials.admin.aboutback")
@endforeach
@foreach ($skills as $skill)
    @include("backend.partials.admin.skillback")
@endforeach
@endsection