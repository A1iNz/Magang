@extends('layouts.app')
@section('content')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Left Side (Logo and Description) -->
                    <div class="col-lg-5 col-md-6 d-flex flex-column justify-content-center align-items-center p-5" style="background-color: #84C3B1; min-height: 100vh;">
                        <div class="card d-flex justify-content-center align-content-center" style="width: 80%; max-width: 300px;">
                            <img class="img-fluid" src="{{ asset('img/rsuds.png') }}" alt="RSUD Logo">
                        </div>
                        <div class="text-center mt-4">
                            <h3>Helpdesk Rumah Sakit Umum Daerah Dr. Soetomo</h3>
                        </div>
                    </div>              

                    <!-- Spacer (Optional) -->
                    <div class="col-lg-1 d-none d-lg-block"></div>      

                    <!-- Right Side (Login Form) -->
                    <div class="col-lg-5 col-md-6 p-5">
                        <div class="border-0 rounded-lg mt-5">
                            <!-- Error Alert -->
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <!-- Login Form -->
                            <div class="card-body fs-5">
                                <form action="{{ url('proses_login') }}" method="POST" id="logForm">
                                    {{ csrf_field() }}

                                    <!-- Access Type Dropdown -->
                                    <div class="form-group">
                                        <label class="small mb-1" for="akses">Akses Sebagai</label>
                                        <select class="form-select py-2" aria-label="Default select example" name="akses">
                                            <option value="#">Pilih Akses</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Programmer">Programmer</option>
                                            <option value="Hardware">Hardware</option>
                                            <option value="Analis">Analis</option>
                                        </select>
                                    </div>

                                    <!-- Username Field -->
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                                        <input class="form-control py-2" id="inputEmailAddress" name="username" type="text" placeholder="Masukkan Username" required />
                                        @if($errors->has('username'))
                                            <span class="error text-danger">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>

                                    <!-- Password Field -->
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-2" id="inputPassword" type="password" name="password" placeholder="Masukkan Password" required />
                                        @if($errors->has('password'))
                                            <span class="error text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <!-- Login Button -->
                                    <div class="form-group d-flex align-items-center justify-content-center mb-3">
                                        <button class="btn btn-primary btn-block fs-4" style="width: 100%;" type="submit">Login</button>
                                    </div>

                                    <!-- General Request Link -->
                                    <div class="form-group d-flex align-items-center justify-content-center mt-4">
                                        <a href="#" style="color: #84C3B1">GENERAL REQUEST</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Footer (Optional) -->
                        <div class="card-footer text-center">
                            <div class="small">
                                {{-- <a href="{{ route('register') }}">Belum Punya Akun? Daftar!</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection