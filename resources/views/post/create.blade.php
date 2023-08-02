@extends('layouts.main')
@section('content')
    <form action="{{ route('post.store') }}" method="post" class="w-25  m-auto">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input value="{{old('title')}}" name="title" type="text" class="form-control" id="title"
                   placeholder="Title">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" id="content"
                      placeholder="Content">{{old('content')}}</textarea>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input value="{{old('image')}}" name="image" type="text" class="form-control" id="image"
                   placeholder="Image">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="likes">Likes</label>
            <input name="likes" type="number" class="form-control" id="image" placeholder="Likes">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <label for="category">
            <select class="custom-select" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{old('category_id')== $category->id ? 'selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </label>

        <div class="form-group">
            <label for="tags">Tags</label>
            <select multiple class="form-control" id="tags" name="tags[]">
                @foreach($tags as $tag)
                    <option
                        {{ (is_array(old('tags')) and in_array($tag->id, old('tags'))) ? ' selected' : '' }}
                        value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
