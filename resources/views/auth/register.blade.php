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

    .form-registration {
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

    .form-floating {
    position: relative;
  }
  .toggle-password {
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    z-index: 2;
  }
  .form-floating .invalid-feedback {
    margin-top: 0.5rem; /* Adjust as needed */
  }


</style>
<div class="row justify-content-center">
    <div class="col-lg-5">
    <div class="card mt-5">
      <div class="card-body">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center"><b>REGISTRATION</b></h1>
          <form action="/register" method="post">   
            @csrf  
          <div class="form-floating">
              <input type="text" name='name' class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name')}}">
              <label for="name">Name</label>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>  
            <div class="form-floating">
              <input type="text" name='username' class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username')}}">
              <label for="username">Username</label>
              @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name='email' class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email')}}">
              <label for="email">Email address</label>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="password" required>
              <label for="password">Password </label>
              <i class="bi bi-eye-slash toggle-password" toggle="#password"></i>
              @error('password')
              <samll class="invalid-feedback">
                {{ $message }}
              </small>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password_confirmation" class="form-control rounded-bottom @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm Password" required>
              <label for="password_confirmation">Confirm Password </label>
              <i class="bi bi-eye-slash toggle-password" toggle="#password_confirmation" style="position: absolute; right: 30px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
              <!-- @error('password_confirmation')
              <span class="invalid-feedback">
                {{ $message }}
              </span>
              @enderror -->
            </div>
        
            <!-- <div class="form-check text-start my-3">
              <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Remember me
              </label>
            </div> -->
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
          </form>
          <small class='d-block text-center mt-3'>Sudah register? <a href="/login">Login!</a></small>
        </main>
      </div>
      </div>
    </div>
</div>

<!-- JavaScript untuk toggle password visibility -->
<script>
    document.querySelectorAll('.toggle-password').forEach(function(icon) {
        icon.addEventListener('click', function() {
            const input = document.querySelector(this.getAttribute('toggle'));
            if (input.type === 'password') {
                input.type = 'text';
                this.classList.remove('bi-eye-slash');
                this.classList.add('bi-eye');
            } else {
                input.type = 'password';
                this.classList.remove('bi-eye');
                this.classList.add('bi-eye-slash');
            }
        });
    });
</script>
@endsection

