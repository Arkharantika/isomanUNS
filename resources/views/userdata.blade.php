@extends('layouts.app')
 <!--breadcrumb-->
 <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <!--end breadcrumb-->
    <div class="container-fluid">
        <div class="main-body">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <br>
                    <br>
						<div class="card">
							<div class="card-body">
                            <div class="text-center"><i class="bx bxs-user-circle text-dark font-50"></i><h4 class="form-label ">Isi Data Anda</h4>
                                        <!-- <p>Silahkan Isi Data ID dan Password Anda<a href="authentication-signup.html"></a> -->
                                    </div>
                                    <div class="login-separater text-center mb-4"> 
                                        <hr/>
                                    </div>
								<form method="post" action="/userdata/{{$user->id}}" enctype="multipart/form-data" >
                                @method('PATCH')
                                @csrf
									<!-- <div class="mb-3">
										<label class="form-label">Date:</label>
										<input type="date" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Date time:</label>
										<input type="datetime-local" class="form-control">
									</div> -->
                                    <!-- <div class="mb-3">
                                        <label class="form-label">Password:</label>
                                        <input type="password" class="form-control" value="........">
                                    </div> -->
									<div class="mb-3">
										<label class="form-label">Nama Lengkap :</label>
										<input type="text" class="form-control" placeholder="" name="nama_lengkap" id="nama_lengkap">
									</div>
									<div class="mb-3">
										<label class="form-label">NIM / NIP :</label>
										<input type="text" class="form-control" placeholder="" name="nim_nip" id="nim_nip">
									</div>
									<div class="mb-3">
										<label class="form-label">No Telp :</label>
										<input type="text" class="form-control" placeholder="" name="no_telp" id="no_telp">
									</div>
                                    <div class="mb-3">
                                        <label class="form-label">Status :</label>
                                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="option" id="option">
                                            <!-- <option selected>Open this select menu</option> -->
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                        </select>
                                    </div>
									<div class="mb-3">
										<label class="form-label">Alamat :</label>
										<textarea type="form-control" class="form-control" placeholder="" name="alamat" id="alamat"></textarea>
									</div>
                                    <div class="mb-3">
										<label class="form-label">Foto KTP :</label>
										<input type="file" class="form-control" id="file_ktp" name="file_ktp" data-toggle="custom-file-input" multiple>
									</div>
                                    <br>
                                    <div class="mb-3">
                                        <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="btn btn-primary px-4" value="Simpan Data" />
                                        </div>
                                    </div>
									<!-- 
									<div class="mb-3">
										<label class="form-label">Month:</label>
										<input type="month" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Search:</label>
										<input type="search" class="form-control">
									</div> -->
									<!-- <div class="mb-3">
										<label class="form-label">Tel:</label>
										<input type="tel" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Time:</label>
										<input type="time" class="form-control">
									</div>
									<div class="mb-3">
										<label class="form-label">Url:</label>
										<input type="url" class="form-control" placeholder="https://example.com/users/">
									</div>
									<div class="mb-3">
										<label class="form-label">Week:</label>
										<input type="week" class="form-control">
									</div> -->
								</form>
							</div>
						</div>
                </div>
            </div>
        </div>
    </div>