@extends('template.templatepage.index')
<style>
    .container_center {
        height: 100vh;
    }
    .form-container {
        max-width: 500px;
        width: 90%;
        padding: 2rem;
        background: white;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .lineText {
        display: flex;
        flex-direction: row;
        margin: 20px 0px;
    }
    .lineText:before, .lineText:after{
        content: "";
        flex: 1 1;
        border-bottom: 0.5px solid;
        margin: auto;
    }
    .lineText:before {
        margin-right: 10px
    }
    .lineText:after {
        margin-left: 10px
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
                <a href="{{route('password.request')}}" class="text-center d-block my-3 text-decoration-none">Forgot Password?</a>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                
                <label for="" class="lineText">Or</label>
                <div class="d-flex justify-content-center ">
                    <a href="{{route('login.auth')}}" class="text-decoration-none text-black border shadow-sm w-100 text-center">
                        <img src="{{asset('assets/icons/google.svg')}}" alt=""> Login with Google
                    </a>
                </div>
                <div class="my-3">
                    <a href="{{route('auth.registerpage.index')}}" class="text-center d-block text-decoration-none">Don't have an account? Sign up here</a>
                </div>
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
