@extends('layouts.main')
@section('content')
    <div class="w-75 m-auto">

    @foreach($posts as $post)
      <div><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></div>
    @endforeach
        <a href="{{route('post.create')}}">
            <button type="button" class="btn btn-dark">Add one</button>
        </a>
        {{$posts->links()}}
    </div>
@endsection
