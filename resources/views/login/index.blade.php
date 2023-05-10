@extends('layouts.main')
@section('container')
  <div class="row justify-content-center">
      <div class="col-md-5">
          @if (session('loginError'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  {{ session ('loginError') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          @endif
          <div class="container">
              <main class="form-login" style="border: 1px solid #C3C3C3; padding: 40px; margin-top: 50px; border-radius: 30px;">
                  <form action="/login" method="POST">
                      @csrf
                      <h1 class="h4 mb-3 fw-normal">Login Petugas</h1>
                      <div class="form-floating">
                          <input type="email" name="email" class="form-control mt-2 h-20" id="email" placeholder="email@example.com" autofocus>
                          <label for="email">Email</label>
                      </div>
                      <div class="form-floating">
                          <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                          <label for="password">Password</label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
                  </form>
                  <!-- <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Register</a></small> -->
              </main>
          </div>
      </div>
  </div>
@endsection