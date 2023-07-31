 @extends('layouts.main')
@section('content')
    <form action="{{ route('contact.update', $contact->id)}}" method="post" class="w-25 m-auto">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="first_name">Title</label>
            <input name="first_name" type="text" class="1-control" id="first_name"  placeholder="First name">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="last_name">Content</label>
            <textarea name="last_name"  class="form-control" id="last_name"  placeholder="Last name"></textarea>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="photo">Image</label>
            <input name="photo" type="text" class="form-control" id="photo"  placeholder="photo">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="old">Image</label>
            <input name="old" type="number" class="form-control" id="old"  placeholder="Old">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
