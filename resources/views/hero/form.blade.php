@if (Route::has('login'))
@auth
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <h2 for="message" class="text-light">Your Message</h2>
      <textarea class="form-control shoutinput" name="body" id="exampleFormControlTextarea1" rows="3" placeholder="What do you think?"></textarea>
    </div>
    <button type="submit" class="btn btn-primary m-2">Shout!</button>
  </form>
@else
<div class="login-home"><a href="/login">Log in</a> | <a href="/register">Sign Up</a></div>

@endauth
@endif
