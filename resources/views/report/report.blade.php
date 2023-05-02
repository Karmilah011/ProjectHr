@extends('layouts.master')
@section('content')
<div class="card">
                <div class="d-flex justify-content-start mt-4" style="margin-left: 25px">
                    <a href="" class="btn btn-primary"><i class='bx bxs-printer'></i></a>
                    <a href="" class="btn btn-primary ml-2" style="margin-left: 5px;"><i class='bx bxs-file-pdf'></i></a>
                    <div class="col-sm-2 ml-2" style="margin-left: 6px">
                                <input type="text" onfocus="(this.type = 'date')" placeholder="Start date"
                                    @if (isset($startDate)) value="{{ $startDate }}" @endif name="startDate"
                                    class="form-control" id="startDate">
                            </div>

                            <div class="col-sm-2 ml-2" style="margin-left: 4px">
                                <input type="text" onfocus="(this.type = 'date')"
                                    @if (isset($endDate)) value="{{ $endDate }}" @endif name="endDate"
                                    class="form-control" placeholder="End Date" id="endDate">
                            </div>
                    </div>
                <div class="d-flex justify-content-end mt-2" style="padding-right: 25px">
                <div class="mb-3 row">
                        {{-- <div class="col-md-10">
                          <input class="form-control" type="search" value="Search ..." id="html5-search-input">
                        </div>
                        <button type="button" class="btn btn-primary col-md-2 col-form-label">
                            <i class='bx bx-search-alt'></i>
                          </button> --}}
                      </div>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>User_ID</th>
                        <th>Name</th>
                        <th>Leave Type</th>
                        <th>Reason for Leave</th>
                        <th>Start Date</th>
                        <th>Date of Completion</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <?php $countData = count($approval); ?>
                    @if($countData < 1)
                      <tbody class="table-border-bottom" >
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
                      </tr>
                      @endforeach
                    </tbody>
                    @endif
                  </table>
                </div>
    </div>
@endsection