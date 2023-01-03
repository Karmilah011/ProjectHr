<h1>Table Departemen</h1>
<a href="/departemen/create">Tambah</a>
<a href="/departemen/update">Edit</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Departemen</th>
        </tr>
    </thead>
    @foreach($dptm as $id => $value)
    <tbody>
        <tr>
           <td>{{$id+1}}</td>
           <td>{{$value->nama_dpt}}</td>
        </tr>
    </tbody>
    @endforeach
</table>
