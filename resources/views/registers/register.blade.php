<html>
<head>
    <title>Gudang Sederhana | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    @yield('form')
    <body>
        <div class="row justify-content-center" style="margin-top: 150px">
            <div class="col-lg-6">
                <main class="form-registration">
                    <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="name" id="name" required
                                value="{{ old('name') }}" placeholder="Name">
                            <label for="name">Nama</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control " name="email" id="email" required
                                value="{{ old('email') }}" placeholder="name@example.com">
                            <label for="email">Alamat Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-bottom" name="password" id="password" required
                                placeholder="Password">
                            <label for="password">Password</label>
                        </div>
     
                        <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
                    </form>
                    <small class="d-block mt-3">Have an account? <a class="text-danger" href="/login"> Login
                            Here</a></small>
                </main>
            </div>
        </div>
        {{-- <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                    <input value="{{ old('name') }}" type="text" class="form-control" name="nama"  placeholder="myusername" id="name" required>
                    <label for="floatingInputUsername">Name</label>
                    </div>
    
                    <div class="form-floating mb-3">
                    <input value="{{ old('email') }}" type="email" class="form-control" name="email"  placeholder="name@example.com" id="email" required>
                    <label for="floatingInputEmail">Email</label>
                    </div>
    
                    <hr>
    
                    <div class="form-floating mb-3">
                    <input value="{{ old('password') }}" type="password" class="form-control" name="password"  placeholder="Password" id="password" required>
                    <label for="floatingPassword">Password</label>
                    </div>
    
                    <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                    </div>
    
                    <a class="d-block text-center mt-2 small" href="#">Sudah punya akun? Sign In</a>
    
                    <hr class="my-4">
    
                </form>
                </div>
            </div>
            </div>
        </div>
        </div> --}}
    </body>
    
</body>
</html>