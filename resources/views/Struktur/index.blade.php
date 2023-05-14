@extends('layouts.master')
@section('content')
    <div class="card">
                <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
                <i class='bx bxs-plus-circle'></i> Add Organisasi
                </button>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Organization Name</th>
                        <th>Deskripsi</th>
                        <th>Parent</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table table-border-bottom-0">
                      @foreach($struktur as $no => $value)
                        <tr>
                          <td>{{ $no+1 }}</td>
                          <td>{{ $value->namaorganisasi }}</td>
                          <td>{{ $value->deskorganisasi }}</td>
                          <td>{{ $value->parent }}</td>
                          <td><span class="badge @if($value->status_struktur == 'active') bg-label-success @else bg-label-danger @endif">
                            @if($value->status_struktur == 'active') Active @else Non Active @endif
                          </span></td>
                          <td>
                          <span class="btn">
                            <a href="/struktur/hapus/{{$value->id}}" data-id="{{$value->id}}">
                              <i class='bx bx-trash'></i>
                            </a>
                          </span>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                @include('struktur.create')
    </div>
@endsection