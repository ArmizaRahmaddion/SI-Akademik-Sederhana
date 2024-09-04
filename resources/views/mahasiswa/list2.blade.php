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
<a href="{{url('/')}}">Ke Menu Utama</a>
</head>

<h2>Data Mahasiswa</h>
    <a href="{{url('/mahasiswa/create')}}" class="add-data">Tambah Data</a>
    
  
	<table>
            
			<th>ID</th>
			<th>NIM</th>
			<th>NAMA</th>
			<th>NO HP</th>
			<th>ALAMAT</th>
            <th colspan="2">AKSI</th>
            <?php
                $rec = DB::table('tbmahasiswa')
                ->get();
                $no=0;

                foreach ($rec as $key => $value) {
                    $no++ ?>

<tr>
    <td>{{ $no++}}</td>
    <td>{{ $value->nim }}</td>
    <td>{{ $value->nama }}</td>
    <td>{{ $value->nohp }}</td>
    <td>{{ $value->alamat }}</td>

    <td><a href="{{url('mahasiswa/'.$value->id)}}">Edit</td>
    <td><a href="{{url('deletemahasiswa/'.$value->id)}}" onclick="return confirm('Anda Yakin Menghapus?')">Delete</td>

    <td>
        <form action="{{url('mahasiswa/'.$value->id)}}" method="post">
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

<h3 class="box-title">Data mahasiswa</h3>
                    </div><!-- /.box-header -->
                    <div class="add-data-link">
                      </div>
                      <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary">
                          <i class="fas fa-plus"></i> Tambah Data
                      </a>
                      <a href="{{url('/')}}" class="btn btn-primary">
                     <i class="fas fa-arrow-left"></i> Back to Welcome
                      </a>

                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <!-- ... Bagian lainnya tidak berubah ... -->
                            <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>NIM</th>
                                  <th>NAMA</th>
                                  <th>NO HP</th>
                                  <th>ALAMAT</th>
                                  <th colspan="2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                $rec = DB::table('tbmahasiswa')
                ->get();
                $no=0;

                foreach ($rec as $key => $value) {
                    $no++ ?>

                  <tr>
                      <td>{{ $no++}}</td>
                      <td>{{ $value->nim }}</td>
                      <td>{{ $value->nama }}</td>
                      <td>{{ $value->nohp }}</td>
                      <td>{{ $value->alamat }}</td>

                      <td><a href="{{url('mahasiswa/'.$value->id)}}">Edit</td>
                      <td><a href="{{url('deletemahasiswa/'.$value->id)}}" onclick="return confirm('Anda Yakin Menghapus?')">Delete</td>

                      <td>
                          <form action="{{url('mahasiswa/'.$value->id)}}" method="post">
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