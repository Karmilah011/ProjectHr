@extends('layouts.master')
@section('content')
<div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Update Table</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                      <form action="/user/update/{{$value->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">No Karyawan</label>
                          <div class="col-sm-10">
                            <input type="text" value="{{$value->no_karyawan}}" name="no_karyawan" class="form-control" id="basic-default-name" placeholder="Masukan No Karyawan">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Nama Karyawan</label>
                          <div class="col-sm-10">
                            <input type="text" value="{{$value->name}}" name="name" class="form-control" id="basic-default-company" placeholder="Masukan Nama Anda">
                          </div>
                        </div>
                        <div class="row mb-3">
                                    <label for="dobBasic" class="col-sm-2 col-form-label" for="basic-default-company">Role</label>
                                    <div class="col-sm-10">
                                    <select value="{{$value->role}}" name="role" id="" class="form-control">
                                      <option value="" disable>~Pilih Role~</option>
                                      <option value="admin">Admin</option>
                                      <option value="pimpinan">Pimpinan</option>
                                      <option value="karyawan">Karyawan</option>
                                    </select>
                                  </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <input type="text" value="{{$value->email}}" name="email" id="basic-default-email" class="form-control" placeholder="Masukan Email Anda" aria-label="Masukan Email Anda" aria-describedby="basic-default-email2">
                              <span class="input-group-text" id="basic-default-email2">@renos.id</span>
                            </div>
                            <div class="form-text"></div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Message</label>
                          <div class="col-sm-10">
                            <textarea id="basic-default-message" class="form-control"></textarea>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
@endsection