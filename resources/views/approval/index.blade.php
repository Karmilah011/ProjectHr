@extends('layouts.master')
@section('content')
<div class="card">
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead class="table">
                <tr>
                    <th>No</th>
                    <th>Leave Type</th>
                    <th>Reason for Leave</th>
                    <th>Employe Name</th>
                    <th>Employe ID</th>
                    <th>Start Date</th>
                    <th>Date of Completion</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php $countData = count($approval); ?>
            @if($countData < 1)
                <tbody class="table-border-bottom">
                    <tr>
                        <td colspan="11" height="200px">
                            <h4 align="center">
                                Data Not Found
                            </h4>
                        </td>
                    </tr>
                </tbody>
            @else
                <tbody class="table-border-bottom-0">
                    @foreach($approval as $no => $value)
                        <tr>
                            <td>{{ $no+1 }}</td>
                            <td>{{ $value->leave }}</td>
                            <td>{{ $value->alasancuti }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->employe_id}}</td>
                            <td>{{ $value->tgl_mulai }}</td>
                            <td>{{ $value->tgl_selesai }}</td>
                            <td>
                                @if($value->approved == 'setuju')
                                    <span class="badge bg-label-success">Approved</span>
                                @elseif($value == 'tolak' || $value == 'batal')
                                    <span class="badge bg-label-danger">Rejected</span>
                                @else
                                    <span class="badge bg-label-warning">Waiting</span>
                                @endif
                            </td>
                            <td>
                            <button type="button" class="btn btn-icon btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal">
                          <i class='bx bx-check'></i>
                          </button>
                          <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel1">Leave Details</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Employee ID</label>
                                      <input type="text" name="employe_id" value="{{$value->employe_id}}" id="" cols="15" rows="5" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Leave Type</label>
                                      <input type="text" name="leave_type_id" value="{{$value->leave}}" id="nameBasic" class="form-control" placeholder="Enter Name">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Reason for Leave</label>
                                      <textarea name="alsncuti" value="" id="" cols="15" rows="5" class="form-control" placeholder="">{{$value->alasancuti}}</textarea>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Start Date</label>
                                      <input type="date" name="tanggalmulai" value="{{$value->tgl_mulai}}" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="nameBasic" class="form-label">Date of Completion</label>
                                      <input type="date" name="tanggalselesai" value="{{$value->tgl_selesai}}" id="nameBasic" class="form-control" placeholder="">
                                    </div>
                                  </div>
                               
                                </div>
                                <div class="modal-footer">
                                <form action="/approval/update/{{$value->id}}" method="post">
                                @csrf
                                @method('PUT')
                                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Close
                                  </button>
                                  <button type="submit" name="approved" value="setuju" class="btn btn-outline-secondary">
                                   Approval
                                  </button>
                                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    Reject
                                  </button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          @if($value->approved != 'menunggu')
                          <a href="/approval/hapus/{{$value->id}}" class="btn btn-icon btn-danger delete" data-id="{{$value->id}}">
                          <i class='bx bx-trash'></i>
                          </a>
                          @endif
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
</div>
@endsection
