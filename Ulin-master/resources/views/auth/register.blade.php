@extends('auth.dashboard')
@section('title')
Register
@endsection
@section('input-box')
<div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5" style="text-align: center; margin-top: 20px;">Register now</h2>
          <form method="POST" action="{{ route('register.process') }}">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-12 mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form3Example1">Username</label>
                    <input type="text" id="form3Example1" class="form-control" name="username" placeholder="Enter Username"/>
                </div>
              </div>
            </div>

            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Name</label>
                <input type="name" id="form3Example3" class="form-control" name="name" placeholder="Enter Name"/>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email</label>
                <input type="email" id="form3Example3" class="form-control" name="email" placeholder="Enter Email"/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password</label>
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
              Register
            </button>
            <div style="text-align: center; margin-bottom: 10px"><b>wanna login?</b></div>
            <a href="{{ url('login') }}" class="btn btn-dark btn-block mb-4">
              Login</a>
          </form>
        </div>
      </div>
@endsection
