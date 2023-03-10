@extends('layouts.master')
@section('content')
<div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table">
                      <tr>
                        <th>No</th>
                        <th>Jenis Cuti</th>
                        <th>Nama Karyawan</th>
                        <th>Tgl Mulai</th>
                        <th>Tgl Selesai</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table table-border-bottom-0">
                      <tr>
                        <td>1</td>
                        <td>Cuti Tahunan</td>
                        <td>Pieter Kurnaidi</td>
                        <td>15 Dec 2023</td>
                        <td>16 Dec 2023</td>
                        <td><span class="badge bg-label-primary me-1">Approved</span></td>
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
                      <tr>
                        <td>2</td>
                        <td>Cuti Tahunan</td>
                        <td>Adimarta</td>
                        <td>1 Dec 2022</td>
                        <td>5 Dec 2022</td>
                        <td><span class="badge bg-label-info me-1">Menunggu Approval</span></td>
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
                  </table>
                </div>
                @include('approval.create')
    </div>
@endsection