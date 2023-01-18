
@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>
    <div class="login">
        <div class="d-flex justify-content-center">
            <div class="abc pt-3">
                <div class="card-body">
                    <center>
                        <h3>Login Page</h3>
                    </center>
                    @if (session('successRegister'))
                       <p style="color: red">{{session('successRegister')}}</p>
                    @endif
                    
                    <form action="{{route('login-baru')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" name="password" id="exampleInputPassword1"  placeholder="Masukkan Kata Sandi">
                        </div>
                        <button type="submit" class="btn btn-primary" id="oop">Login</button>
                        <br>
                        <span>Belum punya akun? <a href="/register">Register</a> sekarang!</span>
                    </form>
                    
                    </div>
                    
                    @if(session('eror'))
                        {{ session('eror') }}
                    @endif

                    @if(session('isLogin'))
                        {{ session('isLogin') }}
                    @endif

                    @endsection

</body>
</html>