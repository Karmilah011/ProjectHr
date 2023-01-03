<form action="/departemen/update/{{$departemen->id}}" method="post">
    @csrf 
    <input type="text" value="{{$departemen->nama_dpt}}" class="form-control" name="nama_dpt" placeholder="Masukan Departemen Anda!">
        <br>
        <button class="btn btn-primary btn-sm" type="submit">Edit</button>
</form>