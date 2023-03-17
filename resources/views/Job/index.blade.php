@extends('layouts.master')
@section('content')
    <div class="card">
                <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                <i class='bx bxs-plus-circle'></i> Add Job
                </button>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Job Name</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <?php $countData = count($job); ?>
                    @if($countData < 1)
                      <tbody class="table-border-bottom" >
                        <tr>
                          <td colspan="11" height="200px">
                            <h4 align="center">
                              Tidak Ada Data
                            </h4>
                          </td>
                        </tr>
                      </tbody>
                    @else
                    @foreach($job as $no => $value)
                    <tbody class="table table-border-bottom-0">
                      <tr>
                      <td>{{$no+1}}</td>
                        <td>{{$value->job_name}}</td>
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
                    @endif
                  </table>
                  <br>
                  <div class="pagination justify-content-center">
                <nav aria-label="Page navigation">
                <ul class="pagination pagination-round">
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
              </ul>
            </nav>
                </div>
                </div>
                @include('job.create')
    </div>
@endsection