<div class="modal fade" id="smallModal" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Leave Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/fcuti/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameBasic" class="form-label">Leave Type</label>
                            <select name="leave_master_id" id="jenis_cuti" class="form-control">
                                @foreach($leave_master as $value)
                                <option value="{{$value->id}}">{{$value->leave_type}}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="row">
                        <div class="col mb-3">
                                <label for="emailBasic" class="form-label">Reason for Leave</label>
                                <textarea name="alsncuti" id="" cols="15" rows="5" class="form-control"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                     </div>
                    
                        <div class="col mb-3">
                            <label for="dobBasic" class="form-label">Jumlah Hari</label>
                            <input name="jhari" type="text" id="dobBasic" class="form-control" placeholder="">
                        </div>
                         <!-- dari sini id nya -->
                        <div class="" id="startEnd_date">
                            <div class="col mb-3">
                                <label for="dobBasic" class="form-label">Start Date</label>
                                <input name="tanggalmulai" type="date" id="dobBasic" class="form-control" placeholder="">
                            </div>
                            <div class="col mb-3">
                                <label for="dobBasic" class="form-label">Date of Completion</label>
                                <input name="tanggalselesai" type="date" id="dobBasic" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!-- sampe sini -->
                        <!-- dari sini id nya -->
                        <div class="" id="attacment">
                            <div class="col mb-3">
                                <label for="dobBasic" class="form-label">Attachment</label>
                                <input name="attachment" type="file" id="dobBasic" class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="emailBasic" class="form-label">Approver</label>
                            <select name="approver_id" id="" class="form-control">
                                @foreach($user as $value)
                                <option value="{{$value->employe_id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- <div class="row g-2" id="cutiWrapper">
                        <div class="row">
                            <div class="col mb-0">
                                <label for="emailBasic" class="form-label">Reason for Leave</label>
                                <textarea name="alsncuti" id="" cols="15" rows="5" class="form-control"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">Jumlah Hari</label>
                            <input name="jhari" type="text" id="dobBasic" class="form-control" placeholder="">
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">Start Date</label>
                            <input name="tanggalmulai" type="date" id="dobBasic" class="form-control" placeholder="">
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">Date of Completion</label>
                            <input name="tanggalselesai" type="date" id="dobBasic" class="form-control" placeholder="">
                        </div>
                        <div class="col mb-0">
                            <label for="emailBasic" class="form-label">Approver</label>
                            <select name="approver_id" id="" class="form-control">
                                @foreach($user as $value)
                                <option value="{{$value->employe_id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row g-2" id="sakitWrapper">
                        <div class="row">
                            <div class="col mb-0">
                                <label for="emailBasic" class="form-label">Reason for Leave</label>
                                <textarea name="alsncuti" id="" cols="15" rows="5" class="form-control"
                                    placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">Jumlah Hari</label>
                            <input name="jhari" type="text" id="dobBasic" class="form-control" placeholder="">
                        </div>
                        <div class="col mb-0">
                            <label for="emailBasic" class="form-label">Approver</label>
                            <select name="approver_id" id="" class="form-control">
                                @foreach($user as $value)
                                <option value="{{$value->employe_id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col mb-0">
                            <label for="dobBasic" class="form-label">Attachment</label>
                            <input type="file" id="dobBasic" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row g-2" id="melahirkanWrapper">
                        <div class="col mb-0">
                            <label for="emailBasic" class="form-label">Approver</label>
                            <select name="approver_id" id="" class="form-control">
                                @foreach($user as $value)
                                <option value="{{$value->employe_id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
