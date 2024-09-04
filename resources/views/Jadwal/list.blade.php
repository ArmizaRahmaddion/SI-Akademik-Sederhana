@extends('tabledefault')
@include('layout.sidebar')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Jadwal
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data Jadwal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <a href="{{ url('/Jadwal/create') }}" class="btn btn-primary">
              <i class="fa fa-plus"></i> Tambah Data
              </a>
              <a href="{{ url('/Admin') }}" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i> Back to Dasboard
              </a>
            </div><!-- /.box-header -->
            <table id="customers"  class="table ">
            <div class="box-body">
        
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Hari</th>
                <th scope="col">Ruangan</th>
                <th scope="col">Dosen</th>
                <th scope="col">Kelas</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Tahun Akademik</th>
                <th scope="col">Jam Masuk</th>
                <th scope="col">Jam Keluar</th>
                <th scope="col">Aksi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rec = App\Models\Tbjadwal::with('Tbhari','Tbruangan','Tbdosen','Tbkelas','Tbmatakuliah','tbtahunakademik')->get();
            $no = 0;

            foreach ($rec as $key => $value) {
                $no++;
            ?>
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $value->Tbhari->hari }}</td>
                    <td>{{ $value->Tbruangan->nama }}</td>
                    <td>{{ $value->Tbdosen->nama }}</td>
                    <td>{{ $value->Tbkelas->nama_kelas }}</td>
                    <td>{{ $value->Tbmatakuliah->nama }}</td>
                    <td>{{ $value->Tbtahunakademik->nama_akademik }}</td>
                    <td>{{ $value->jammasuk }}</td>
                    <td>{{ $value->jamkeluar }}</td>

                    <td class="action-icons">
                        <a href="{{url('Jadwal/'.$value->id)}}" class="btn btn-success">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                    </td>
                    <td>
                        <form action="{{url('Jadwal/'.$value->id)}}" method="post">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="id" value="{{$value->id}}">
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger delete-button" onclick="return confirm('Anda Yakin Menghapus?')">
                                <i class="fas fa-trash"></i> Delete

                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@stop
    