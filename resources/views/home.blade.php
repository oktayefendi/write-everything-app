@extends('master')
@section('title', 'Home')

@section('content')

<section id="hero">
<div class="container">
    <div class="row">
        <h1>Shout Yourself</h1>
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <h2 for="message" class="text-light">Your Message</h2>
              <textarea class="form-control shoutinput" name="body" id="exampleFormControlTextarea1" rows="3" placeholder="What do you think?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary m-2">Shout!</button>
          </form>
    </div>
</div>
</section>
<div class="container">
    <div class="row text-center">
            @if (Session::has('messages'))
            <div class="alert alert-primary" role="alert">
                {{Session::get('messages')}}
            </div>
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-primary" role="alert">
                    {{$error}}
                </div>
                @endforeach
            @endif

    </div>
</div>

   <div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$post->created_at->diffForHumans()}}</div>
                <div class="card-body">
                  <p class="card-text">{{$post->body}}</p>
                </div>
                <button class="btn btn-primary" type="button"><i class="fa-regular fa-heart"></i> 38</button>
              </div>
        </div>
        @endforeach
    </div>
   </div>
@endsection
