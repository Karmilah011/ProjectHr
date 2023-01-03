@extends('layouts.master')
@section('content')
<div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                          Profile
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                          Keluarga
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                      <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>
                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nama Lengkap</label>
                            <input class="form-control" type="text" id="firstName" name="firstName" value="" autofocus="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">NIP</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Jabatan</label>
                            <input class="form-control" type="text" id="email" name="email" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organization" class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="organization" name="organization" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Tempat Kelahiran</label>
                              <input type="text" id="phoneNumber" name="phoneNumber" class="form-control">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="address" name="address">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Alamat Ktp</label>
                            <input class="form-control" type="text" id="state" name="state">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Status</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">No.Telp</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="language" class="form-label">direktorat</label>
                            <input id="text" class="form-control" id="aaaaa" name="aaaaa">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="timeZones" class="form-label">Tanggal Masuk Kerja</label>
                            <input id="text" class="form-control" id="aaaaa" name="aaaaa">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="currency" class="form-label">Masa Kerja</label>
                            <input id="text" class="form-control" id="aaaaa" name="aaaaa">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">NPWP</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="country">BPJS</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="zipCode" class="form-label">Alamat Tinggal</label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Simpan</button>
                          <button type="reset" class="btn btn-outline-secondary">Batal</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                      </div>
                      <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                        <p>
                          Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                          cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                          cheesecake fruitcake.
                        </p>
                        <p class="mb-0">
                          Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                          cotton candy liquorice caramels.
                        </p>
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center">
                            <li class="page-item prev">
                              <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">4</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">5</a>
                            </li>
                            <li class="page-item next">
                              <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
@endsection