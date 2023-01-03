<h3>Departemen</h3>
<form action="/departemen/store" method="post">
    @csrf 
    <input type="text" name="nama_dpt" placeholder="Masukan Nama Departemen Anda">
    <br>
    <button class ="btn btn-primary btn-sm" type="submit">Tambah</button>
</form>