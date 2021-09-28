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
            @foreach($post->tags as $tag)
            <a href="#" class="tag-cloud-link">{{$tag->name}}</a>
            @endforeach
            
        </div>
    </div>

    <div class="about-author d-flex p-4 bg-light">
        <div class="bio mr-5">
            <img src="{{ asset('assets/images/' . $post->author->image)}}" alt="Image placeholder" class="img-fluid mb-4">
        </div>
        <div class="desc">
            <h3>{{$post->author->lastname}} {{$post->author->firstname}}</h3>
            <p>{{$post->author->biography}}</p>
        </div>
    </div>
</div>

@stop