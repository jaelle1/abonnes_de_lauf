<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <link
      rel="stylesheet"
      href="{{asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')}}"
    />
    <title>document</title>
  </head>
  <body>
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-xs-4 logo">
          <img src="./image/logo_auf_2020_.jpg" alt="" />
        </div>
      </div>

    <div id="app">
      
            

                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        
                        @guest
                            @if (Route::has('login'))
                               <div class="d-flex justify-content-end" >
                                    <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                               
                            @endif

                            @if (Route::has('register'))
                               
                                    <a class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            @endif
                            </div>
                        @else
                           
                               

                               
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="container-fluid footer">
      <div class="col-md col-xs-8">
        <h1>Agence Universitaire de la Francophonie</h1>
      </div>
      <div class="row ww text-light">
        <div class="col-md-1 col-xs-2">
          <p class="p1">www.auf.org</p>
        </div>
        <div class="col-md-4 offset-md-7 col-xs-12">
          <p class="p2">copyrigth.auf.2022 Tous droits réservés</p>
        </div>
      </div>
    </div>
    </div>
    <script src="{{asset('js/setimeout.js')}}" defer></script>
</body>
</html>
