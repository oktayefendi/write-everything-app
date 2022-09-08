@if (Route::has('login'))
@auth
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="shout-create">
      <textarea class="form-control shoutinput" name="body" id="exampleFormControlTextarea1" rows="3" placeholder="What do you think?"></textarea>
      <button type="submit" class="btn shout-btn">Shout! </button>
    </div>
  </form>
@else

<div class="shout-create">
    <span class="shout-announcement">Write what you want. Tell me what you couldn't tell anyone. Just be free, no one can judge you.</span>
  </div>
@endauth
@endif
