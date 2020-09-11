<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Theme Made By www.w3schools.com - No Copyright -->
      <title>Bootstrap Theme Simply Me</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   </head>
   <body>
      <!-- Navbar -->
      <nav class="navbar navbar-default">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="#">Usuarios</a></li>
                  <li><a href="#">Tarifas</li>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Third Container (Grid) -->
      <div class="container-fluid bg-3 text-center">
         <h3 class="margin">Parkin Test</h3>
         <div class="row">
            @yield('content')
         </div>
      </div>
      <!-- Footer -->
      <footer class="container-fluid bg-4 text-center">
      </footer>
   </body>
</html>