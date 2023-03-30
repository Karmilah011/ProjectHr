@extends('layouts.master')
@section('content')

    <?php
        // $dataKeluarga = ;
        $jsonEncodeData = json_encode($userFamily);
        $countDataKeluarga = count($userFamily);
        $index = 0;
        // var_dump($jsonEncodeData);
        // die;
    ?>
    <div class="nav-aligen-top mb-4">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                    Profile
                </button>
            </li>
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                    Keluarga
                </button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                 <div class="row mb-5">
                 <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                          </label>
                          <!-- <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button> -->
                          <p class="text-muted mb-0">Allowed JPG AND PNG</p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" id="name" name="name" value="{{$userDetail->name}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="employe_id" class="form-label">Employe Id</label>
                            <input class="form-control" type="text" name="employe_id" id="employe_id" value="{{$userDetail->employe_id}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" id="email" name="email" value="{{$userDetail->email}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="nip" class="form-label">NIP</label>
                            <input class="form-control" type="number" name="nip" id="nip" value="{{$userDetail->nip}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="job_id" class="form-label">Job Possition</label>
                            <input class="form-control" type="text" id="job_id" name="job_id" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <input class="form-control" type="text" name="gender" id="gender" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tempat_kelahiran" class="form-label">Tempat Kelahiran</label>
                            <input class="form-control" type="text" id="tempat_kelahiran" name="tempat_kelahiran" value="" placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Alamat KTP</label>
                            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" value=""></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="alamat_tinggal" class="form-label">Alamat Tinggal</label>
                            <textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal" value=""></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">No Handphone</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">(+62)</span>
                              <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="000 0000 0000">
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organisasi_id" class="form-label">Organization</label>
                            <input type="text" class="form-control" id="organisasi_id" name="organisasi_id" placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Tanggal Bergabung</label>
                            <input class="form-control" type="date" id="tanggal_bergabung" name="tanggal_bergabung" placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="masa_kerja" class="form-label">Masa Kerja</label>
                            <input type="text" class="form-control" id="masa_kerja" name="masa_kerja" placeholder="">
                          </div>
                          <div class="mb-6 col-md-12">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-control" type="text" id="status" name="status" placeholder="">
                          </div>
                        </div>
                        <!-- <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div> -->
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                <div class="row mb-5">
                <div class="card mb-4">
                    <h5 class="card-header">Profile Details Family</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="{{asset('admin/assets/img/avatars/1.png')}}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                        <!-- <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Upload new photo</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Reset</span>
                          </button>

                          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div> -->
                      </div>
                    </div>
                    <hr class="my-0">
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="nameFamily" class="form-label">Name</label>
                            <input class="form-control" type="text" id="nameFamily" name="nameFamily" value="{{$userFamily[$index]['name']}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="nik" class="form-label">NIK</label>
                            <input class="form-control" type="text" name="nik" id="nik" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-control" type="text" id="status" name="status" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <input class="form-control" type="text" name="gender" id="gender" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tempat_lahir" class="form-label">Tempat Kelahiran</label>
                            <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" value="" placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Alamat KTP</label>
                            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" value=""></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="alamat" class="form-label">Address</label>
                            <textarea class="form-control" id="alamat" name="alamat" value=""></textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">No Handphone</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">(+62)</span>
                              <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="000 0000 0000">
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-control" type="text" id="status" name="status" placeholder="">
                          </div>
                        </div>
                        <!-- <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div> -->
                      </form>
                    </div>
                    <!-- <div class="pagination justify-content-center">
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
            </div> -->
                  <div class="pagination justify-content-center">
                    @foreach($userFamily as $key => $value)
                      <button class="btn btn-primary" id="paginate" value="{{$key}}" onclick="return pagination({{$key}},{{$jsonEncodeData}})">
                        {{$key+1}}
                      </button>
                    @endforeach
                  </div>
                    <!-- /Account -->
                  </div>
                </div>
                </div>
        @endsection

        <script>
          function pagination(key,data){
            var indexData = data[key]
            changeData(indexData);
          }
          
          function changeData(data){
            var nama = document.getElementById("nameFamily");
            var valueName = data['name']
            nama.setAttribute('value',valueName)
            console.log(data)
          }
          
        </script>