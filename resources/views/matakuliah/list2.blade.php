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

<h2>Data matakuliah</h>
<a href="{{url('/')}}">Ke Menu Utama</a>
    <a href="{{url('/matakuliah/create')}}" class="add-data">Tambah Data</a>
    
  
	<table>
            <th>NO</th>
			<th>SKS</th>
			<th>JAM</th>
			<th>KODE</th>
			<th>RUANGAN</th>
			<th>HARI</th>
            <th colspan="2">AKSI</th>
            <?php
                $rec = DB::table('tbmatakuliah')
                ->get();
                $no=0;

                foreach ($rec as $key => $value) {
                    $no++ ?>

<tr>
<td>{{ $no}}</td>
    <td>{{ $value->sks }}</td>
    <td>{{ $value->jam }}</td>
    <td>{{ $value->kode }}</td>
    <td>{{ $value->ruangan }}</td>
    <td>{{ $value->hari }}</td>

    <td><a href="{{url('matakuliah/'.$value->id)}}">Edit</td>
    <td><a href="{{url('deletematakuliah/'.$value->id)}}" onclick="return confirm('Anda Yakin Menghapus?')">Delete</td>

    <td>
        <form action="{{url('matakuliah/'.$value->id)}}" method="post">
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