<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/45ffe72d-f136-4f3f-84ef-21ffba2740e1/dccxpbw-07e36c9b-f8c2-4943-be47-09078b02332b.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzQ1ZmZlNzJkLWYxMzYtNGYzZi04NGVmLTIxZmZiYTI3NDBlMVwvZGNjeHBidy0wN2UzNmM5Yi1mOGMyLTQ5NDMtYmU0Ny0wOTA3OGIwMjMzMmIucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.95yACdxd03qwYc2GyE8sckbrI0lDmE8R--bEjzZ6sa8">
        <title> BIBLIOTECA </title>
        <!-- CDN BOOTSTRAP CSS y de SweetAlert -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      </head>

      <body style="background: rgb(191, 226, 228)">
                      <!-- INICIA NAVBAR -->
                      <nav class="navbar navbar-expand-lg navbar-light bg-info ">
                        <div class="container-fluid fw-bold font-monospace mt-2 mb-2">
                          <a class="navbar-brand text-light {{request()->routeIs('apodoMain')? 'text-primary fw-bold':''}}" href="Main"> <h4>Página principal</h4></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active text-light {{request()->routeIs('apodoReg')? 'text-primary fw-bold':''}}" aria-current="page" href="Registration">Registrar libro</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                     <!-- TERMINA NAVBAR --> 

          @yield('contenido')                             
          

          
          <!-- CDN BOOTSTRAP JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
         <footer class="main-footer mt-5" width=100% >
        <div class="alert alert-dark" role="alert" style="background: cadetblue">
          <em> Biblioteca LeoSan_Juan CopyRight® 03 Noviembre 2022 </em>
      
        </div>
      </footer>  
       </body>
     
       </html>
