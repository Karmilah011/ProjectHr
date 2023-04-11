@extends('layouts.master')
@section('content')

    <?php
        // $dataKeluarga = ;
        $jsonEncodeData = json_encode($userFamily);
        $countDataKeluarga = count($userFamily);
        $index = 0;
        $status = $userDetail->status;
        // var_dump($userFamily);
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
            @if($userDetail->status == 'menikah' || $userDetail->status == '' || $userDetail == NULL)
            <li class="nav-item">
                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                    Family
                </button>
            </li>
            @endif
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
                            <label for="job" class="form-label">Job Possition</label>
                            <input class="form-control" type="text" id="job_position" name="job_position" value="{{$userDetail->job_position}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <input class="form-control" type="text" name="gender" id="gender" value="{{$userDetail->gender}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tempat_kelahiran" class="form-label">Place of birth</label>
                            <input class="form-control" type="text" id="tempat_kelahiran" name="tempat_kelahiran" value="{{$userDetail->tempat_kelahiran}}" placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tanggal_lahir" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$userDetail->tanggal_lahir}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">KTP Address</label>
                            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp">{{$userDetail->alamat_ktp}}</textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="alamat_tinggal" class="form-label">Address</label>
                            <textarea class="form-control" id="alamat_tinggal" name="alamat_tinggal">{{$userDetail->alamat_tinggal}}</textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">No Handphone</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">(+62)</span>
                              <input type="text" id="no_hp" name="no_hp" value="{{$userDetail->no_hp}}"class="form-control" placeholder="000 0000 0000">
                            </div>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="organisasi_id" class="form-label">Organization</label>
                            <input type="text" class="form-control" id="struktur_id" name="organisasi_id" value="{{$userDetail->organisasi_id}}" placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="" class="form-label">Join Date</label>
                            <input class="form-control" type="date" id="tanggal_bergabung" name="tanggal_bergabung" value="{{$userDetail->tanggal_bergabung}}"placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="masa_kerja" class="form-label">Years of Service</label>
                            <input type="text" class="form-control" id="masa_kerja" name="masa_kerja" value="{{$userDetail->masa_kerja}}"placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="bpjsNumber">BPJS</label>
                              <input type="text" id="bpjs" name="bpjs" class="form-control" value="{{$userDetail->bpjs}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="npwpNumber">NPWP</label>
                              <input type="text" id="npwp" name="npwp" class="form-control" value="{{$userDetail->npwp}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                              <option selected disabled>--Status--</option>
                              <option value="menikah" <?php if($status == 'menikah'){echo 'selected';} ?>>Married</option>
                              <option value="belum menikah" <?php if($status == 'belum menikah'){echo 'selected';} ?>>Singgle</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Update</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                <div class="row mb-5">
                <div class="card mb-4">
                    @if($countDataKeluarga > 0)
                    
                    <div class="card-header">
                      <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12">
                          <div class="d-flex justify-content-end pt-2" style="padding-right: 25px">
                            <a href="/user-family/create">+ Create New Data</a>
                          </div>
                        </div>
                        <h5 class="col-lg-12 col-md-12 col-sm-12">Profile Details Family</h5>
                      </div>
                    </div>
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
                    @endif
                    <div class="card-body">
                      @if($countDataKeluarga > 0)
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="nameFamily" class="form-label">Name</label>
                            <input class="form-control" type="text" id="nameFamily" name="nameFamily" value="{{$userFamily[$index]->nama_lengkap_family}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="employe_id" class="form-label">Employe Id</label>
                            <input class="form-control" type="text" name="employe_id" id="employe_id" value="{{$userFamily[$index]->employe_id}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="statusFamily" class="form-label">Status</label>
                            <input class="form-control" type="text" id="statusFamily" name="statusFamily" value="{{$userFamily[$index]->hubungan}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="gender_family" class="form-label">Gender</label>
                            <input class="form-control" type="text" name="genderFamily" id="genderFamily" value="{{$userFamily[$index]->gender_family}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tempat_lahir_family" class="form-label">Place of birth</label>
                            <input class="form-control" type="text" id="tempat_lahir_family" name="tempat_lahir_family" value="{{$userFamily[$index]->tempat_kelahiran_family}}" placeholder="">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="tanggal_lahir_family" class="form-label">Date of birth</label>
                            <input type="date" class="form-control" id="tanggal_lahir_family" name="tanggal_lahir_family" value="{{$userFamily[$index]->tgl_lahir_family}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="alamat_ktp" class="form-label">KTP Address</label>
                            <textarea class="form-control" id="alamat_ktp_family" name="alamat_ktp_family">{{$userFamily[$index]->alamat_ktp_family}}</textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="alamatTinggal" class="form-label">Address</label>
                            <textarea class="form-control" id="alamatTinggal" name="alamatTinggal">{{$userFamily[$index]->alamat_tinggal_family}}</textarea>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="bpjs_family">BPJS</label>
                              <input type="text" id="bpjs_family" name="bpjs_family" class="form-control" value="{{$userFamily[$index]->bpjs_family}}">
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="npwp_family">NPWP</label>
                              <input type="text" id="npwp_family" name="npwp_family" class="form-control" value="{{$userFamily[$index]->npwp_family}}">
                          </div>
                        </div>
                        <!-- <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div> -->
                      </form>
                      @else
                        <h3 class="text-center">Data Not Found</h3>
                        <h5 for="" class="text-center">
                          <a href="/user-family/create">+ Crate Data</a>
                        </h5> 
                      @endif
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
            // change name
            var nama = document.getElementById("nameFamily");
            var valueName = data.nama_lengkap_family
            nama.setAttribute('value',valueName)
            // change status
            var status = document.getElementById("statusFamily");
            var valueStatus = data.hubungan
            status.setAttribute('value',valueStatus)
            //change gender
            var gender = document.getElementById("genderFamily");
            var valueGender = data.gender_family
            gender.setAttribute('value',valueGender)
            //change tempat lahir
            var tempat_lahir = document.getElementById("tempat_lahir_family");
            var valueTempatLahir = data.tempat_kelahiran_family
            tempat_lahir.setAttribute('value',valueTempatLahir)
            //change tanggal lahir
            var tanggal_lahir = document.getElementById("tanggal_lahir_family");
            var valueTanggalLahir = data.tgl_lahir_family
            tanggal_lahir.setAttribute('value',valueTanggalLahir)
            //change bpjs
            var bpjs_family = document.getElementById("bpjs_family");
            var valueBPJSFamily = data.bpjs_family
            bpjs_family.setAttribute('value',valueBPJSFamily)
            //change npwp
            var npwp_family = document.getElementById("npwp_family");
            var valueNPWPFamily = data.npwp_family
            npwp_family.setAttribute('value',valueNPWPFamily)


            // alamat
            var alamatTinggal = document.getElementById("alamatTinggal");
            var alamat_tinggalValue = data.alamat_tinggal_family
            alamatTinggal.innerHTML = alamat_tinggalValue
            // alamat ktp
            var alamatKTP = document.getElementById("alamat_ktp_family");
            var alamat_ktpValue = data.alamat_ktp_family
            alamatKTP.innerHTML = alamat_ktpValue
            console.log(data)
          }
          
        </script>