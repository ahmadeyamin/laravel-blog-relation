@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mt-5">
            <div class="card-header">
                <h3>{{$post->title}}</h3>
            </div>
            <div class="card-body">
                <p>{{$post->body}}</p>
            </div>
            <div class="card-footer">
                Owner :{{$post->author->name}} <br> @ {{$post->created_at->diffForHumans()}} Tags : @foreach ($post->categories
                as $cat)
                <div class="badge badge-primary">{{$cat->name}}</div>
                @endforeach
                <br> Categoris: @foreach ($post->tags as $tag)
                <div class="badge badge-primary">{{$tag->name}}</div>
                @endforeach
            </div>
        </div>

        <form action="{{ route('addcomment',['slug'=>$post->slug]) }}" class="mt-3" method="POST">
            <h2>Put A Comment</h2>
            @csrf
            <input type="hidden" value="{{$post->id}}" name="post_id">
            <div class="form-md">
                <textarea name="body" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
        @foreach ($comments as $comment)
        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-10 col-xl-8">

                <div class="media d-block d-md-flex">
                    <img class="d-flex rounded-circle avatar z-depth-1-half mb-3 mx-auto" height="50" src="{{asset('storage/img/avatar.png')}}"
                        alt="Avatar">
                    <div class="media-body text-center text-md-left ml-md-3 ml-0">
                        <h5 class="mt-0 font-weight-bold blue-text">{{$comment->author->name}}</h5>
                        {{$comment->body}}
                    </div>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->
        @endforeach

    </div>
@endsection