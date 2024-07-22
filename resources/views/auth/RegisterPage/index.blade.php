@extends('template.templatepage.index')
<style>
    .container_center {
        height: 100vh;
    }
    .form-container {
        max-width: 400px;
        width: 100%;
        padding: 2rem;
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>
@section('content')
    <div class="container_center d-flex justify-content-center align-items-center">
        <div class="form-container border">
            <form  action="{{route('register.create')}}"  method="POST" class="needs-validation" novalidate>
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="username"  class="form-label fw-bold">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" required>
                    @if ($errors->has('username'))
                        <div class="text-danger">{{ $errors->first('username') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email"  class="form-label fw-bold">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100 shadow-sm">Register</button>
                <label for="" class="text-center d-block my-2">or</label>
                <div class="d-flex justify-content-center ">
                    <a href="{{route('login.auth')}}" class="text-decoration-none text-black border shadow-sm w-100 text-center">
                        <img src="{{asset('assets/icons/google.svg')}}" alt=""> Sign in with Google
                    </a>
                </div>

            </form>
        </div>
    </div>

    <script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
    </script>
@endsection
