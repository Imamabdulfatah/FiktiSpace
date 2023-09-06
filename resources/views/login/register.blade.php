<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fikti Space | register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    
    
    <link rel="shortcut icon" href="/img/LogoUtama.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body >
<div id="auth">   
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="/img/LogoUtama.png" height="140" class='mb-4'>
                        <h3>Sign Up</h3>
                        <p>Mohon isi form Registrasi</p>
                    </div>
                    <form action="/registration" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" id="name" class="form-control @error('name')is-invalid @enderror"  name="name" required value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" class="form-control @error('username')is-invalid @enderror"  name="username" required value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control @error('email')is-invalid @enderror"  name="email" required value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control @error('password')is-invalid @enderror" name="password" required>
                                    @error('password')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="input-box col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <span class="details" style="display: inline;">Pilih Category Lomba</span>
                                    <select class="form-control col-lg-12 col-md-12 col-sm-12 @error('category_id')is-invalid @enderror" name="category_id" required>
                                        <option disabled selected value>...</option>
            
                                        <option value="1">Sport</option>
                                        <option value="2">Art</option>
                                       
            
                                    </select>
                                    @error('category_id')
                                    <div class="invalid-feedback">
                                       {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            
                        </diV>
                            <a href="/login">Apakah sudah punya akun? Login</a>
                        <div class="clearfix">
                            <button class="btn btn-primary float-end">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script src="assets/js/main.js"></script>
</body>

</html>
