@extends('template.index')

@section('content')
<div class="col-lg-8 ftco-animate">
    <div class="container">
        <div id="liste-posts" class="row d-flex">
            
        @include('posts.liste')
            

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a id="older-posts" href="#">+</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop