@extends('layouts.main')
@section('content')

    <div>
        {{$post->id}} - {{$post->title}}
    </div>
    <div>

        content - {{$post->content}}

    </div>
    <a href="{{route('post.index')}}">
        <button type="button" class="btn btn-dark">Back</button>
    </a>

    <a href="{{route('post.edit', $post->id)}}">
        <button type="button" class="btn btn-dark">Edit</button>
    </a>

    <form action="{{route('post.delete', $post->id)}}" method="post">
        @csrf
        @method('delete ')

        <input type="submit" value="Delete" class="btn btn-danger">
    </form>
@endsection
