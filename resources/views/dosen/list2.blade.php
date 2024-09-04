<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</body>
</head>

<h2>Data Dosen</h>
<a href="{{url('/')}}">Ke Menu Utama</a>
    <a href="{{url('/dosen/create')}}" class="add-data">Tambah Data</a>
    
  
	<table>
            <th>ID</th>
			<th>NIP</th>
			<th>NAMA</th>
            <th>JABATAN</th>
			<th>NO HP</th>
			<th>ALAMAT</th>
			<th>PRODI</th>
            <th colspan="2">AKSI</th>
            <?php
                $rec = App\Models\Tbdosen::with('tbjabatan','prodi')
                ->get();
                $no=0;

                foreach ($rec as $key => $value) {
                    $no++ ?>

<tr>
    <td>{{ $no}}</td>
    <td>{{ $value->nip }}</td>
    <td>{{ $value->nama }}</td>
    <td>{{ $value->tbjabatan->nama_jabatan }}</td>
    <td>{{ $value->nohp }}</td>
    <td>{{ $value->alamat }}</td>

    <td><a href="{{url('dosen/'.$value->id)}}">Edit</td>
    <td><a href="{{url('deletedosen/'.$value->id)}}" onclick="return confirm('Anda Yakin Menghapus?')">Delete</td>

    <td>
        <form action="{{url('dosen/'.$value->id)}}" method="post">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <input type="hidden" name="id" value="{{$value->id}}">
        {{method_field('DELETE')}}

    <button type="submit">hapus</button>
                </form>
                </td>
    
</tr>
<?php
}
?>

    </table>
</body>
</html>