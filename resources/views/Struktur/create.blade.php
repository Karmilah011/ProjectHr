<div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="smallModal">Form User</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <form action="/user/store" method="POST">
                                  @csrf
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Nama Organisasi</label>
                                    <input type="text" name="namaorganisasi" id="nameBasic" class="form-control" placeholder="Masukan Nama Organisasi" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="emailBasic" class="form-label">Deskripsi Organisasi</label>
                                    <textarea name="deskorganisasi" id="" cols="15" rows="2" class="form-control"></textarea>
                                  </div>
                                  <div class="row">
                                  <div class="col mb-3">
                                    <label for="dobBasic" class="form-label">Parent organisasi</label>
                                    <select name="parent" id="parentOption" class="form-control">
                                      <option value="" Disabled>Parent</option>
                                      <option value="md">MD</option>
                                      <option value="tech">Tech</option>
                                      <option value="product">Product & Tech</option>
                                    </select>
                                    <input class="form-check-input" type="checkbox" value = "true" id="topParentCheck">
                                      <label class="form-check-label" for="flexCheckDefault">
                                        Top Parent
                                      </label>
                                  </div>
                                </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Status</label>
                                    <div class="form-check form-switch mb-2">
                                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                      <label class="form-check-label" for="flexSwitchCheckChecked">Aktif</label>
                                    </div>
                                  </div>
                              </div>
                              </div>
                              <div class="modal-footer">
                               <button type="submit" class="btn btn-primary">Ajukan</button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Batal
                                </button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
</div>
@section('script')
<script>
  let parentOption = document.getElementById('parentOption')
      parentOption.value = "";
  // location.reload();
  let topParentCheck = document.getElementById('topParentCheck')
      topParentCheck.checked = false;
  parentOption.addEventListener("click", ()=>{
    topParentCheck.disabled = true;
    // console.log(parentOption.value)
  });

  topParentCheck.addEventListener("click", ()=>{
    if(topParentCheck.checked){
      parentOption.value = "";
      parentOption.disabled = true;
    }else{
      parentOption.value = "";
      parentOption.disabled = false;
    }
    // console.log(parentOption.value)
  });
</script>
@endsection