<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.nav')
      <div class="container">
          
        <div id="main" class="row">
            @yield('content')
        </div>
      </div>
    </body>
</html>
