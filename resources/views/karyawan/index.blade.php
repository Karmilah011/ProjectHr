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
                        <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="150" width="150" id="uploadedAvatar">  
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
                      <div class="row mb-5">
                <div class="col-md-6 col-lg-4 mb-3" style="width: 20%; height: 15%">
                  <div class="card h-100">
                    <img class="card-img-top" src="{{asset('admin/assets/img/elements/2.jpg')}}" alt="Card image cap">
                  </div>
                </div>
                <div class="col-md-20 col-lg-4 mb-3" style="width: 50%">
                <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table table-striped">
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><strong>Nama Lengkap</strong></td>
                        <td>Jennie</td>
                      </tr>
                      <tr>
                        <td><strong>NIP</strong></td>
                        <td>000000000</td>
                      </tr>
                      <tr>
                        <td><strong>Status</strong></td>
                        <td>Menikah</td>
                      </tr>
                      <tr>
                        <td><strong>Jenis Kelamin</strong></td>
                        <td>Perempuan</td>
                      </tr>
                      <tr>
                        <td><strong>Tanggal Lahir</strong></td>
                        <td>16 Januari 1996</td>
                      </tr>
                      <tr>
                        <td><strong>Alamat KTP</strong></td>
                        <td>Jl.Suka-suka</td>
                      </tr>
                      <tr>
                        <td><strong>Alamat Tinggal</strong></td>
                        <td>Jl.Suka-suka lagi</td>
                      </tr>
                      <tr>
                        <td><strong>No.Telp</strong></td>
                        <td>08900000000</td>
                      </tr>
                      <tr>
                        <td><strong>NPWP</strong></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><strong>BPJS</strong></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><strong>Status</strong></td>
                        <td>Istri</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
                  </div>
                    </div> 
                    <ul class="pagination justify-content-center">
                            <li class="page-item active">
                              <a class="page-link" href="javascript:void(0);">1</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="javascript:void(0);">3</a>
                            </li>
                          </ul>
                  </div>
@endsection