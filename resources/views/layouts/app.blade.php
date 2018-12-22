{{
  /*
  |--------------------------------------------------------------------------
  | StudNote v1
  |--------------------------------------------------------------------------
  | Contact me for anything that concerns the project ! :)
  | Creator : Salah Eddine Bentayeb
  | GitHub  : https://github.com/HalasProject/
  | Facebook: https://www.facebook.com/BentayebSalah
  | Twitter : https://twitter.com/halasdior
  | LinkedIn: https://www.linkedin.com/in/salahbentayeb/
  | 
  */
  }}

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Salah Bentayeb">

  @include('layouts.contact')
  <title>{{ config('app.name')}} </title>
  <!---------------SCRIPT------------------------------->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/bootstrap.js') }}" defer></script>
  <script src="{{ asset('js/jquery.min.js') }}" defer></script>
  <script src="{{ asset('js/popper.min.js') }}" defer></script>
  <!---------------STYLE------------------------------->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
  <!---------------ICON------------------------------->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body>


  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm border-0">
      <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="{{ url('/')}} "><i class="fas fa-home"></i>&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('fiche')}} "><i class="fas fa-file"></i>&nbsp;&nbsp;Affichage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('fiche/create')}} "><i class="fas fa-plus"></i>&nbsp;&nbsp;Creation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-comment-dots"></i>&nbsp;&nbsp;Contact</a>
          </li>
        </ul>

        <div class="form-inline mt-2 mt-md-0">
         <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user-graduate"></i>&nbsp;&nbsp;{{ __('Login') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;{{ __('Register') }}</a>
          </li>
          @else
          <li class="nav-item dropdown">
            @if(Auth::user()->admin == 1)
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Admin Panel<span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('contact')}} "><i class="fas fa-archive"></i>&nbsp;&nbsp;Liste Messages</a>

              <a class="dropdown-item" href="#"><i class="fas fa-user-times"></i>&nbsp;&nbsp;Liste Users</a>

            </div>
          </li>
          @endif
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('home') }}"><i class="fas fa-archive"></i>&nbsp;&nbsp;Mes Publication</a>

              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="fas fa-user-times"></i>&nbsp;&nbsp;{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
</header>

<main class="py-4">
  <br><br>
  @yield('content')
  

  <div class="card-footer text-muted fixed-bottom alert alert-dark alert-dismissible fade show mb-0 rounded-0" role="alert">
      <div class="text-center">All Right reserved. Powered by <strong>Salah Bentayeb</strong></div> 
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
</main>

</div>
</body>
</html>
