@extends('layouts.main')
@section('content')
    <div>
        <a href="{{route('post.create')}}">
            <button type="button" class="btn btn-dark">Add one</button>
        </a>
    </div>
    @foreach($posts as $post)
      <div><a href="{{route('post.show', $post->id)}}">{{$post->title}}</a></div>
    @endforeach
@endsection
