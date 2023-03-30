<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('login/asset/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('login/asset/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login/asset/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login/asset/css/style.css') }}">

    <title>Login Pengaduan Masyarakat</title>
  </head>
  <body>
  

  <div class="content">
    <div class="container">
      <div class="row justify-content-center">
        <!-- <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div> -->
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                  <div class="mb-4">
                    @if (session('alert'))
                    <div class="alert alert-danger text-center" role="alert">
                    {{ session('alert') }}
                    </div>
                    @endif
                  <h3>Login Pengaduan Masyarakat</h3>
                </div>
                <form action="" method="post">
                    @csrf
                  <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    
                  </div>

                  <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary">

                  <span class="d-block text-center my-4 text-muted"> Belum punya akun? <a href="/register">Register</a></span>
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{ asset('login/asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('login/asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('login/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login/asset/js/main.js') }}"></script>
  </body>
</html>