<!doctype html>
 <html lang="en">

 <head>
     <title>@yield('title')</title>
     <!-- Required meta tags -->

     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, 
shrink-to-fit=no" />

     <!-- Bootstrap CSS v5.2.1 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
 </head>

 <body>
     <header>
         <nav class="navbar navbar-expand-sm navbar-light bg-light">
             <div class="container">
                 <a class="navbar-brand" href="#">Halo, {{ Auth::user()->name }}</a>
                 <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                     data-bs-target="#collapsibleNavId" aria controls="collapsibleNavId" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="collapsibleNavId">
                     <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                         <li class="nav-item">
                             <a class="nav-link active" href="#" aria current="page">Home
                                 <span class="visually hidden">(current)</span></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('produk.index') }}">Produk</a>
                         </li>
                     </ul>
                     <a href="{{ route('keluar') }}" class="btn btn outline-danger">Logout</a>
                 </div>
             </div>
         </nav>

     </header>
     <main class="container py-3">
         @yield('konten')
     </main>
     <footer class="text-center">
         FIKOM &copy; 2024 | Belajar Laravel
     </footer>
     <!-- Bootstrap JavaScript Libraries -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"integrity="sha384BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
     </script> 
 </body> 
  
 </html>