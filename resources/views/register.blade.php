@extends('layout')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Halaman Register</title>
  </head>
  <body>
    <div class="register">
        <div class="d-flex justify-content-center">
            <div class="abc pt-3">
                <div class="card-body">
                  <center>
                    <h3>Register Page</h3>
                </center>
                <form action="/register" method="POST">
                  @csrf
  <div class="mb-3">
      <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Masukkan Nama">
  </div>
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Masukkan Username">
  </div>
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Masukkan Email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1"  
        placeholder="Masukkan kata sandi">
  </div>
        <button type="submit" class="btn btn-primary">Submit</button><br><br>
          <a href="/login">Kembali</a>
        
  </form>
  <p class="text-danger text-center fw-bold">
    {{ session('berhasil') }}
  </p>
                </div>
            </div>

        </div>
    </div>

@endsection