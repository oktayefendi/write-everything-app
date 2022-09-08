<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title') Shout Yourself</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset("/")}}assets/css/style.css">
    <!-- Bootstrap CSS v5.2.0-beta1 -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">What is this?</a>
              </li>

            </ul>
            @if (Route::has('login'))
@auth

<div class="login-home">

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Logout') }}  <i class="fa-solid fa-arrow-right"></i>
         </x-jet-dropdown-link>
 </form>
</div>

@else
<div class="login-home">
    <a href="/login">Log in</a>
    <a href="/register">Sign Up</a>
</div>

@endauth
@endif
          </div>
        </div>
      </nav>
