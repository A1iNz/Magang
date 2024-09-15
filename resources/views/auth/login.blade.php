@extends('layouts.app')
@section('content')

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="">
                <div class="row">
                    <div class="col-lg-5 p-5" style="width: 520px; height: 1024px; background-color: #84C3B1">
                        <div class="card d-flex justify-content-center align-content-center flex-wrap" style="margin: 240px 0px 80px 60px; width: 320px; height: 320px">
                            <img class="" style="width: 300px; height:300px" src="{{ asset('img/rsuds.png') }}" alt="">
                        </div>
                        <div class="text-center">
                            <h3>Helpdesk Rumah Sakit Umum Daerah Dr. Soetomo</h3>
                        </div>
                    </div>              
                    <div class="col-lg-1">

                    </div>      
                    <div class="col-lg-5 p-5">
                        <div class=" border-0 rounded-lg mt-5">
                            {{-- Error Alert --}}
                            @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{session('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            {{-- <div class="card-header">                               
                                <h3 class="text-center font-weight-light my-4">Login</h3>
                            </div> --}}
                            <div class="card-body fs-5">
                                <form action="{{url('proses_login')}}" method="POST" id="logForm">
                                    {{ csrf_field() }}
                                    <div class="form-group" style="margin-top: 244px">
                                        @error('login_gagal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                                            <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        <label class="small mb-1" for="akses">Akses Sebagai</label>
                                        <select class="form-select py-2" aria-label="Default select example">
                                            <option value="#">Pilih Akses</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Programmer">Programmer</option>
                                            <option value="Hardware">Hardware</option>
                                            <option value="Analis">Analis</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        @error('login_gagal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <span class="alert-inner--text"><strong>Warning!</strong>  {{ $message }}</span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            @enderror
                                        <label class="small mb-1" for="inputEmailAddress">Username</label>
                                        <input class="form-control py-2" id="inputEmailAddress" name="username" type="text" placeholder="Masukkan Username"/>
                                        @if($errors->has('username'))
                                        <span class="error">{{ $errors->first('username') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control py-2" id="inputPassword" type="password" name="password" placeholder="Masukkan Password"/>
                                        @if($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                    @endif
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-center  mb-0" style=" margin-top: 160px">
                                        <button class="btn btn-primary btn-block btn-login fs-4" style="width: 520px;" type="submit">Login</button>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-center mt-4">
                                        <a href="" style="color: #84C3B1">GENERAL REQUEST</a>
                                    </div>
                                </form>
                            </div>
                        <div class="card-footer text-center">
                            <div class="small">
                                {{-- <a href="{{route('register')}}">Belum Punya Akun? Daftar!</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
@endsection