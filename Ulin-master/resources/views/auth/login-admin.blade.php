@extends('auth.dashboard')
@section('title')
Login
@endsection
@section('input-box')
<div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5" style="text-align: center;">Admin Login</h2>
          <form method="POST" action="{{ route('login.admin.process') }}">
          @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form3Example1">Username</label>
                    <input type="text" id="form3Example1" class="form-control" name="username" placeholder="Enter Username"/>
                    @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>
              </div>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control" name="password" placeholder="Enter Password"/>
                {{-- <i class="bi bi-eye-slash" id="togglePassword"></i> --}}
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                The data I entered is correct!
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign in
            </button>

            <div style="text-align: center; margin-bottom: 10px"><b>don't have an account yet?</b></div>

            <a href="{{ url('register') }}" class="btn btn-dark btn-block mb-4">
              Register</a>
          </form>
        </div>
      </div>
@endsection
{{-- @section('script')
<script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");
    togglePassword.addEventListener("click", function(){
        const type = password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        this.classList.toggle("bi-eye");
    });
    const form = document.querySelector("form");
    form.addEventListener('submit',function(e){
        e.preventDefault();
    });
</script>
@endsection --}}
