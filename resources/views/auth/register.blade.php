@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')
<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">


                                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                        <form action="/register" method="POST">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input 
                                                        class="form-control" 
                                                        id="inputFirstName" 
                                                        type="text" 
                                                        placeholder="Enter your user name"
                                                        name="username"
                                                        />
                                                        <label for="inputFirstName">Username</label>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div> --}}
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input 
                                                 name="name"
                                                class="form-control" id="inputEmail" type="text" placeholder="Input your Name" />
                                                <label for="inputEmail">Name</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input 
                                                 name="email"
                                                class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input
                                                        name="password"
                                                        class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input 
                                                        name="password_confirmation"
                                                        class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-block" type="submit" >Create Account</button>    
                                                    {{-- <a class="btn btn-primary btn-block " href="login.html">Create Account</a> --}}
                                                
                                                
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
@endsection
