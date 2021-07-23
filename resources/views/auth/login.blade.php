@extends('layouts.app')

@section('content')
<!--wrapper-->
<div class="container">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
                            <br>
							<img src="{{asset('images/uns-hitam.png')}}" width="360" alt="" />
						</div>
                        <!-- <div class="text-center">
                        <h1>APLIKASI ISOMAN UNS<h1>
                        </div> -->
						<div class="card">
                        <div class="card-header text-center"><h1><h1></div>
							<div class="card-body">
                            
                                <!-- <div class="border p-4 rounded"> -->
                                    <div class="text-center"><i class="bx bxs-user-circle text-dark font-50"></i><h4 class="form-label ">Masuk </h4>
                                        <!-- <p>Silahkan Isi Data ID dan Password Anda<a href="authentication-signup.html"></a> -->
                                    </div>
                                    <!-- <div class="d-grid">
                                        <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                                        <img class="me-2" src="assets/images/icons/search.svg" width="16" alt="Image Description">
                                        <span>Sign in with Google</span>
                                            </span>
                                        </a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
                                    </div> -->
                                    <div class="login-separater text-center mb-4"> 
                                        <hr/>
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" method="POST" action="{{ route('login') }}">           
                                        @csrf

                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email :</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password :</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- <br>
                                            <br> -->
                                            <div class="col-md-6">
                                                <br>
                                                <!-- <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Ingat Saya</label>
                                                </div> -->
                                            </div>

                                            <!-- <div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a> -->
                                            
                                        </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-dark btn-lg px-5"><i class="bx bxs-lock-open"></i>Masuk</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <!-- </div> -->
                            
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
</div>
<!--end wrapper-->

@endsection
