@extends('template.index')

@section('content')

<div class="col-lg-8 ftco-animate">
    <p class="mb-5">
        <img src="{{ asset('assets/images/' . $post->image)}}" alt="" class="img-fluid">
    </p>

    <h1 class="mb-3 h1">{{$post->title}}</h1>
    <p>
        {{$post->content}}
    </p>
    <div class="tag-widget post-tag-container mb-5 mt-5">
        <div class="tagcloud">
            <a href="#" class="tag-cloud-link">Life</a>
            <a href="#" class="tag-cloud-link">Sport</a>
            <a href="#" class="tag-cloud-link">Tech</a>
            <a href="#" class="tag-cloud-link">Travel</a>
        </div>
    </div>
</div>

@stop