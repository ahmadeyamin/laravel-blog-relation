@extends('layouts.app') 
@section('content')
<div class="row">
    @if ($posts->count() > 0) @foreach ($posts as $post)
    <div class="col-md-4 col-sm-12 my-5">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('post.show',$post->slug) }}" class="">
                    <h2 class="text-center text-dark">{{$post->title}}</h2>
                </a>
            </div>
            <div class="card-body">
                {{$post->body}}
            </div>
        </div>
    </div>
    @endforeach @endif
</div>
@endsection