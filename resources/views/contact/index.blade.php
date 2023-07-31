@extends('layouts.main')
@section('content')
    <div>
        <a href="{{route('contact.create')}}">

            <button type="button" class="btn btn-dark">Add Contact</button>
        </a>
    </div>
    @foreach($contacts as $contact)
      <div><a href="{{route('contact.show', $contact->id)}}">{{$contact->id}}-{{$contact->last_name}}</a></div>
    @endforeach
@endsection
