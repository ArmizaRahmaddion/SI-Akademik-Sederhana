@extends('tabledefault')
@section('content')
@include('layout.sidebar')



<?php
$rec = DB::table('tbmahasiswa')
  ->where('id', $id)
  ->first();

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Form Edit</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Form Edit Data mahasiswa</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
            <a href="{{url('/mahasiswa')}}" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i> Back to List
            </a>
            <form action="{{url('mahasiswa/'.$id)}}" method="POST">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <input type="hidden" name="id" value="{{$id}}">
              {{method_field('PUT')}}
              <br>
              <label>nim</label>
              <input type="text" class="form-control" name="nim" value="{{$rec->nim}}">
              <br>
              <label>nama</label>
              <input type="text" class="form-control" name="nama" value="{{$rec->nama}}">
              <br>
              <label>Jenis Kelamin</label>
              <select id="jeniskelamin" name="jeniskelamin" class=" form-control">
                <option value="" disabled>Pilih Jenis Kelamin</option>
                <option value="laki-laki" {{ $rec->jeniskelamin === 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="perempuan" {{ $rec->jeniskelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
              </select>
              <br> <label for="">Prodi </label>
              <br>
              <select id="id_prodi" name="id_prodi" class="form-control w-25">
                <option value="" disabled>Pilih Prodi</option>
                <?php
                $recProdi = App\Models\Tbprodi::all();

                foreach ($recProdi as $prodi) {
                  $select = $prodi->id == $rec->id_prodi ? 'selected' : '';
                  echo "<option value=\"{$prodi->id}\" $select>{$prodi->nama}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">dosen pa </label>
              <br>
              <select id="id_pa" name="id_pa" class="form-control">
                <option value="" disabled>Pilih Dosen PA</option>
                <?php
                $recDosenPA = App\Models\Tbdosen::all();

                foreach ($recDosenPA as $dosenPA) {
                  $select = $dosenPA->id == $rec->id_pa ? 'selected' : '';
                  echo "<option value=\"{$dosenPA->id}\" $select>{$dosenPA->nama}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">Fakultas </label>
              <br>
              <select id="id_fakultas" name="id_fakultas" class="form-control">
                <option value="" disabled>Pilih Fakultas</option>
                <?php
                $recFakultas = App\Models\Tbfakultas::all();

                foreach ($recFakultas as $fakultas) {
                  $select = $fakultas->id == $rec->id_fakultas ? 'selected' : '';
                  echo "<option value=\"{$fakultas->id}\" $select>{$fakultas->nama_fakultas}</option> ";
                }
                ?>
              </select>
              <br>
              <label>nohp</label>
              <input type="text" class="form-control" name="nohp" value="{{$rec->nohp}}">
              <br>
              <label>alamat</label>
              <input type="text" class="form-control" name="alamat" value="{{$rec->alamat}}">
              <br>
              <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> EDIT DATA</button>
          </div><!-- /.box-body -->
        </div><!-- /.box -->
  </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop