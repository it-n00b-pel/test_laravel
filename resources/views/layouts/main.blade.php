@vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Posts</title>
</head>
<body>
<div class="container">
   <div class="row">
       <nav class="navbar navbar-expand-lg bg-body-tertiary">
           <div class="container-fluid">
               <a class="navbar-brand" href="#">Navbar</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="{{route('main.index')}}">Main</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="{{route('about.index')}}">About</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="{{route('contact.index')}}">Contact</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Posts</a>
                       </li>

                   </ul>
                   <form class="d-flex" role="search">
                       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                       <button class="btn btn-outline-success" type="submit">Search</button>
                   </form>
               </div>
           </div>
       </nav>
{{--       <nav>--}}
{{--           <ul>--}}
{{--               <li><a href="{{route('main.index')}}">Main</a></li>--}}
{{--               <li><a href="{{route('about.index') }}">About</a></li>--}}
{{--               <li><a href="{{route('contact.index')}}">Contacts</a></li>--}}
{{--               <li><a href="{{route('post.index')}}">Posts</a></li>--}}

{{--           </ul>--}}
{{--       </nav>--}}
   </div>
</div>
    @yield('content')
</body>
</html>
