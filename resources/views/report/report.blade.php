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
                        <th>Jenis Cuti</th>
                        <th>Alasan Cuti</th>
                        <th>Tgl Mulai</th>
                        <th>Tgl Selesai</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>1</td>
                        <td>Cuti Tahunan</td>
                        <td>Liburan</td>
                        <td>1 January 2023</td>
                        <td>9 January 2023</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
    </div>
@endsection