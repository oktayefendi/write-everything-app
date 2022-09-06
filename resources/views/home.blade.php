@extends('master')
@section('title', 'Home')

@section('content')

<section id="hero">
<div class="container">
    <div class="row h-components">
        <h1>Shout Yourself</h1>
        @include('hero.form')
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
<section id="newposts">
   <div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-lg-4">
            <div class="post-new">
                <div class="post-meta">{{$post->created_at->diffForHumans()}}</div>
                <div class="post-body">
                  <p>{{$post->body}}</p>
                </div>
              </div>
        </div>
        @endforeach

        {!! $posts->links() !!}

    </div>
   </div>
</section>
@endsection
