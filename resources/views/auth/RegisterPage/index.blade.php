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
        <div class="form-container">
            <form  action="{{route('register.create')}}"  method="POST" class="needs-validation" novalidate>
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="firstname"  class="form-label fw-bold">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter Firstname" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                    @if ($errors->has('firstname'))
                        <div class="text-danger">{{ $errors->first('firstname') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="lastname"  class="form-label fw-bold">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname" required>
                    @if ($errors->has('lastname'))
                        <div class="text-danger">{{ $errors->first('lastname') }}</div>
                    @endif
                </div>
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
                <button type="submit" class="btn btn-primary w-100">Register</button>

                <a href="{{route('login.auth')}}">Sign Up with Google</a>
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
