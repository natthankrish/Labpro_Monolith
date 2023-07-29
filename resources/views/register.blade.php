@extends('layout.main')

@section('container')
  <div class="row justify-content-center mt-5">
    <div class="col-md-4 row-md-4">
        <main class="form-signin w-100 m-auto">
            <form>
              <h1 class="h3 mb-3 fw-normal">Register</h1>
              <div class="form-floating">
                <input type="email" class="form-control" id="firstName" placeholder="name@example.com">
                <label for="floatingInput">First Name</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="lastName" placeholder="name@example.com">
                <label for="floatingInput">Last Name</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                <label for="floatingInput">Email Address</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingUsername" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              <div class="form-check text-start my-3">
                <label>
                  Have an account? <a href="/login">Login</a>
                </label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            </form>
          </main>
    </div>
  </div>
@endsection
