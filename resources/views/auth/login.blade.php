@extends('layouts.app')

@section('content')

<style>
body {
        background-color: #f8f9fa;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 40px;
    }

    .form-signin {
        width: 100%;
        max-width: 400px;
        margin: auto;
    }

    .form-floating {
        margin-bottom: 20px;
    }

    .form-floating label {
        color: #495057;
    }

    .form-floating input {
        border-radius: 5px;
        padding: 12px;
    }

    .form-floating input:focus {
        border-color: #6c757d;
    }

    .btn-primary {
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-weight: bold;
    }

    .btn-primary:hover {
        background-color: #45a049;
    }

    .btn-primary:focus {
        background-color: #45a049;
        box-shadow: none;
    }

    .btn-primary:active {
        background-color: #3d8b40;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-weight: bold;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .btn-secondary:focus {
        background-color: #5a6268;
        box-shadow: none;
    }

    .btn-secondary:active {
        background-color: #4b5257;
    }

</style>

<div class="row justify-content-center align-items-center">
    <div class="col-md-4">
    <div class="card mt-5">
      <div class="card-body">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center"><b>LOGIN</b></h1>
          <form action="/login" method="post">   
            @csrf
            
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old ('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password">Password</label>
                <!-- membuat form checkbox dengan perintah menjalankan function showHide() saat diklik -->
                <input type="checkbox" onclick="showHide()"> Tampilkan Password 
            </div>
        
            <!-- <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div> -->
            <button class="btn btn-primary w-100 py-2" type="submit">LOGIN</button>
          </form>
          <small class='d-block text-center mt-3'>Belum punya akun? <a href="/register">Register dulu!</a></small>
        </main>
      </div>
    </div>
    </div>
</div>
<script>
    //java script untuk menjalankan check box pada password
        function showHide() {
            var inputan = document.getElementById("password");
            if (inputan.type === "password") {
                inputan.type = "text";
            } else {
                inputan.type = "password";
            }
        }

        
        document.addEventListener('DOMContentLoaded', function() {
            var alert = document.querySelector('.alert');
            if (alert) {
                var closeButton = alert.querySelector('.btn-close');
                closeButton.addEventListener('click', function() {
                    alert.style.display = 'none';
                });
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 3000);
            }
        });
    </script>
@endsection
