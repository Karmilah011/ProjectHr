@extends('layouts.master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <h4>Form Family</h4>
    </div>
    <div class="card-body">
                      <form id="formAccountSettings" action="/user-family/store" method="POST">
                        @csrf
                        <div class="row" id="form1">
                          <div class="mb-3 col-md-12">
                            <label for="nameFamily" class="form-label">Name</label>
                            <input class="form-control" type="text" id="nameFamily1" name="nameFamily1" autocomplete="off" value="<?php if(isset($data[0]->nama_lengkap_family)){echo $data[0]->nama_lengkap_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="employe_id" class="form-label">Employe Id</label>
                            <input class="form-control" disabled type="text" name="employe_id1" id="employe_id1" value="{{ Auth::user()->employe_id}}" autocomplete="off">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="statusFamily" class="form-label">Status</label>
                            <input class="form-control" type="text" id="statusFamily1" name="statusFamily1" autocomplete="off" value="<?php if(isset($familyType[0]->hubungan)){echo $familyType[0]->hubungan;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="gender_family" class="form-label">Gender</label>
                            <input class="form-control" type="text" name="genderFamily1" id="genderFamily1" autocomplete="off" value="<?php if(isset($data[0]->gender_family)){echo $data[0]->gender_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="tempat_lahir_family" class="form-label">Tempat Kelahiran</label>
                            <input class="form-control" type="text" id="tempat_lahir_family1" name="tempat_lahir_family1" autocomplete="off" placeholder="" value="<?php if(isset($data[0]->tempat_kelahiran_family)){echo $data[0]->tempat_kelahiran_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="tanggal_lahir_family" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir_family1" name="tanggal_lahir_family1" autocomplete="off" value="<?php if(isset($data[0]->tgl_lahir_family)){echo $data[0]->tgl_lahir_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="alamat_ktp" class="form-label">Alamat KTP</label>
                            <textarea class="form-control" id="alamat_ktp_family1" name="alamat_ktp_family1" autocomplete="off"><?php if(isset($data[0]->alamat_ktp_family)){echo $data[0]->alamat_ktp_family;}?></textarea>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="alamatTinggal" class="form-label">Address</label>
                            <textarea class="form-control" id="alamatTinggal1" name="alamatTinggal1" autocomplete="off"><?php if(isset($data[0]->alamat_tinggal_family)){echo $data[0]->alamat_tinggal_family;}?></textarea>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="bpjs_family">BPJS</label>
                              <input type="text" id="bpjs_family1" name="bpjs_family1" class="form-control" autocomplete="off" value="<?php if(isset($data[0]->bpjs_family)){echo $data[0]->bpjs_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="npwp_family">NPWP</label>
                              <input type="text" id="npwp_family1" name="npwp_family1" class="form-control" autocomplete="off" value="<?php if(isset($data[0]->npwp_family)){echo $data[0]->npwp_family;}?>">
                          </div>
                          <div class="col-md-12 d-flex justify-content-end">
                              <button id="nextToForm2" type="button" class="btn btn-primary me-2">
                                  Next
                              </button>
                          </div>
                        </div>
                        <div class="row" id="form2"> 
                          <div class="mb-3 col-md-12">
                            <label for="nameFamily" class="form-label">Name</label>
                            <input class="form-control" type="text" id="nameFamily2" name="nameFamily2" autocomplete="off" value="<?php if(isset($data[1]->nama_lengkap_family)){echo $data[1]->nama_lengkap_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="employe_id" class="form-label">Employe Id</label>
                            <input class="form-control" disabled type="text" name="employe_id2" id="employe_id2" value="{{ Auth::user()->employe_id}}" autocomplete="off">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="statusFamily" class="form-label">Status</label>
                            <input class="form-control" type="text" id="statusFamily2" name="statusFamily2" autocomplete="off" value="<?php if(isset($familyType[1]->hubungan)){echo $familyType[1]->hubungan;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="gender_family" class="form-label">Gender</label>
                            <input class="form-control" type="text" name="genderFamily2" id="genderFamily2" autocomplete="off" value="<?php if(isset($data[1]->gender_family)){echo $data[1]->gender_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="tempat_lahir_family" class="form-label">Tempat Kelahiran</label>
                            <input class="form-control" type="text" id="tempat_lahir_family2" name="tempat_lahir_family2" autocomplete="off" placeholder="" value="<?php if(isset($data[1]->tempat_kelahiran_family)){echo $data[1]->tempat_kelahiran_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="tanggal_lahir_family" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir_family2" name="tanggal_lahir_family2" autocomplete="off" value="<?php if(isset($data[1]->tgl_lahir_family)){echo $data[1]->tgl_lahir_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="alamat_ktp" class="form-label">Alamat KTP</label>
                            <textarea class="form-control" id="alamat_ktp_family2" name="alamat_ktp_family2" autocomplete="off"><?php if(isset($data[1]->alamat_ktp_family)){echo $data[1]->alamat_ktp_family;}?></textarea>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="alamatTinggal" class="form-label">Address</label>
                            <textarea class="form-control" id="alamatTinggal2" name="alamatTinggal2" autocomplete="off"><?php if(isset($data[1]->alamat_tinggal_family)){echo $data[1]->alamat_tinggal_family;}?></textarea>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="bpjs_family">BPJS</label>
                              <input type="text" id="bpjs_family2" name="bpjs_family2" class="form-control" autocomplete="off" value="<?php if(isset($data[1]->bpjs_family)){echo $data[1]->bpjs_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="npwp_family">NPWP</label>
                              <input type="text" id="npwp_family2" name="npwp_family2" class="form-control" autocomplete="off" value="<?php if(isset($data[1]->npwp_family)){echo $data[1]->npwp_family;}?>">
                          </div>
                          <div class="col-md-12s d-flex justify-content-between">
                              <button id="backToForm1" type="button" class="btn btn-primary me-2 ">
                                  Previous
                              </button>
                              <button id="nextToForm3" type="button" class="btn btn-primary me-2 d-flex justify-content-end">
                                  Next
                              </button>
                          </div>
                          <div class="col-md-12 d-flex justify-content-between">
                              
                          </div>
                        </div>
                        <div class="row" id="form3">
                          <div class="mb-3 col-md-12">
                            <label for="nameFamily" class="form-label">Name</label>
                            <input class="form-control" type="text" id="nameFamily3" name="nameFamily3" autocomplete="off" value="<?php if(isset($data[2]->nama_lengkap_family)){echo $data[2]->nama_lengkap_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="employe_id" class="form-label">Employe Id</label>
                            <input class="form-control" disabled type="text" name="employe_id3" id="employe_id3" value="{{ Auth::user()->employe_id}}" autocomplete="off">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="statusFamily" class="form-label">Status</label>
                            <input class="form-control" type="text" id="statusFamily3" name="statusFamily3" autocomplete="off" value="<?php if(isset($familyType[2]->hubungan)){echo $familyType[2]->hubungan;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="gender_family" class="form-label">Gender</label>
                            <input class="form-control" type="text" name="genderFamily3" id="genderFamily3" autocomplete="off" value="<?php if(isset($data[2]->gender_family)){echo $data[2]->gender_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="tempat_lahir_family" class="form-label">Tempat Kelahiran</label>
                            <input class="form-control" type="text" id="tempat_lahir_family3" name="tempat_lahir_family3" autocomplete="off" placeholder="" value="<?php if(isset($data[2]->tempat_kelahiran_family)){echo $data[2]->tempat_kelahiran_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="tanggal_lahir_family" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir_family3" name="tanggal_lahir_family3" autocomplete="off" value="<?php if(isset($data[2]->tgl_lahir_family)){echo $data[2]->tgl_lahir_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="alamat_ktp" class="form-label">Alamat KTP</label>
                            <textarea class="form-control" id="alamat_ktp_family3" name="alamat_ktp_family3" autocomplete="off"><?php if(isset($data[2]->alamat_ktp_family)){echo $data[2]->alamat_ktp_family;}?></textarea>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label for="alamatTinggal" class="form-label">Address</label>
                            <textarea class="form-control" id="alamatTinggal3" name="alamatTinggal3" autocomplete="off"><?php if(isset($data[2]->alamat_tinggal_family)){echo $data[2]->alamat_tinggal_family;}?></textarea>
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="bpjs_family">BPJS</label>
                              <input type="text" id="bpjs_family3" name="bpjs_family3" class="form-control" autocomplete="off" value="<?php if(isset($data[2]->bpjs_family)){echo $data[2]->bpjs_family;}?>">
                          </div>
                          <div class="mb-3 col-md-12">
                            <label class="form-label" for="npwp_family">NPWP</label>
                              <input type="text" id="npwp_family3" name="npwp_family3" class="form-control" autocomplete="off" value="<?php if(isset($data[2]->npwp_family)){echo $data[2]->npwp_family;}?>">
                          </div>
                          <div class="col-md-12">
                            <button type="button" id="backToForm2" class="btn btn-primary me-2">
                              Previous
                            </button>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                      </form>
    </div>
</div>

<script>
    let form1 = document.getElementById('form1')
    form1.style.display = 'inline'
    let form2 = document.getElementById('form2')
    form2.style.display = 'none';
    let form3 = document.getElementById('form3')
    form3.style.display = 'none';
    

    document.getElementById('backToForm1').addEventListener("click", function(){
      form1.style.display = 'inline'
      form2.style.display = 'none'
      form3.style.display = 'none'
    });
    document.getElementById('nextToForm2').addEventListener("click", function(){
      form1.style.display = 'none'
      form2.style.display = 'inline'
      form3.style.display = 'none'
    });
    document.getElementById('nextToForm3').addEventListener("click", function(){
      form1.style.display = 'none'
      form2.style.display = 'none'
      form3.style.display = 'inline'
    });
    document.getElementById('backToForm2').addEventListener("click", function(){
      form1.style.display = 'none'
      form2.style.display = 'inline'
      form3.style.display = 'none'
    });


</script>

@endsection