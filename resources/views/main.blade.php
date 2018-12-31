<!DOCTYPE html>
<html lang="en">

  <head>
    @include('partials._head')
  </head>

  <body>
    <div class="container-fluid">
    
    <div class="row" >
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <h1 class="todos-title">Todos</h1>
            </div>
          </div>
        </div>

      @yield('content')

    </div>
  </div>

    @include('partials._javascript')

    @yield('scripts')
    
  </body>
</html>