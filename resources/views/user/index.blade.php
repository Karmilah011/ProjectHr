@extends('layouts.master')
@section('content')
<div class="card">
                <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                <i class='bx bxs-plus-circle'></i> Add User
                </button>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Name</th>
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
                          <a href="/user/edit/{{$value->id}}" class="btn btn-success">Edit</a>
                          <a href="/user/delete/{{$value->id}}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
                </div>
                @include('user.create')
              </div>
@endsection