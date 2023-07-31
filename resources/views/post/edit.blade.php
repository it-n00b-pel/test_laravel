 @extends('layouts.main')
@section('content')
    <form action="{{ route('post.update', $post->id)}}" method="post" class="w-25 m-auto">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" value="{{$post->title}}" type="text" class="form-control" id="title"  placeholder="Title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea  name="content"  class="form-control" id="content"  placeholder="Content"></textarea>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input name="image" type="text" value="{{$post->image}}" class="form-control" id="image"  placeholder="Image">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="likes">Likes</label>
            <input name="likes" type="number" value="{{$post->likes}}" class="form-control" id="image"  placeholder="Likes">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
