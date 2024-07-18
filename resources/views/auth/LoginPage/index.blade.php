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
            <form  action="{{route('login.post')}}"  method="POST" class="needs-validation" novalidate>
                @csrf
                @method('POST')
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
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <div>
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif
            </div>
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
