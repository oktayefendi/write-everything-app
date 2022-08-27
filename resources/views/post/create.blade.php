@extends('master')
@section('title', 'Create')

@section('content')

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
     <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <h2 for="message">Your Message</h2>
              <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" placeholder="What do you think?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary m-2">Shout!</button>
          </form>
    </div>
</div>

@endsection
