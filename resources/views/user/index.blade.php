@extends('layouts.master')
@section('content')
<div class="card">
                <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                <i class='bx bxs-plus-circle'></i> Add User
                </button>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-primary">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    @foreach($user as $no => $value)
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$value->no_karyawan}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->role}}</td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
                @include('user.create')
              </div>
@endsection