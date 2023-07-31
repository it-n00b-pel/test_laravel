@extends('layouts.main')
@section('content')
    <div>
        {{$contact->last_name}} - {{$contact->old}}
    </div>

    <a href="{{route('contact.index')}}">
        <button type="button" class="btn btn-dark">Back</button>
    </a>

    <a href="{{route('contact.edit', $contact->id)}}">
        <button type="button" class="btn btn-dark">Edit</button>
    </a>

    <form action="{{route('contact.delete', $contact->id)}}" method="post">
        @csrf
        @method('delete ')

        <input type="submit" value="Delete" class="btn btn-danger">
    </form>

{{--    <a href="{{route('post.edit', $post->id)}}">--}}
{{--        <button type="button" class="btn btn-dark">Edit</button>--}}
{{--    </a>--}}

{{--    <form action="{{route('post.delete', $post->id)}}" method="post">--}}
{{--        @csrf--}}
{{--        @method('delete ')--}}

{{--        <input type="submit" value="Delete" class="btn btn-danger">--}}
{{--    </form>--}}
@endsection
