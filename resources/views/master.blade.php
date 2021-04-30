
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Blog Template · Bootstrap v5.0</title>

    

        <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//getbootstrap.com/docs/5.0/examples/blog/blog.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
      @include('partials.header')
    
      @include('partials.navbar')
    </div>
    
    <main class="container">
     @yield('jumboton')
     
    
      <div class="row">
        <div class="col-md-8">
            @yield('content')
         </div>
         @include('partials.sidebar')
    
        </div>
    
      
    
      </div><!-- /.row -->
    
    </main><!-- /.container -->
    
    @include('partials.footer')
    
    
        
      </body>
    </html>