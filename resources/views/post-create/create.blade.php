@extends('master')
@section('title', 'Create')

@section('content')

<div class="container">
    <div class="row text-center">
        <form>
            @csrf
            <div class="form-group">
              <h2 for="message">Your Message</h2>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="What do you think?"></textarea>
            </div>

            <button type="submit" class="btn btn-primary m-2">Shout!</button>
          </form>
    </div>
</div>

@endsection
