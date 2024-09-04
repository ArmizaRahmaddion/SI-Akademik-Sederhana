@extends('tabledefault')
@section('content')
@include('layout.sidebar')

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
            <h3 class="box-title">Form Edit Data Dosen</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <a href="{{ url('/dosen/create') }}" class="btn btn-primary">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
            <a href="{{url('/dosen')}}" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i> Back to List
            </a>
            <?php
            $rec = App\Models\Tbdosen::with('tbjabatan')
              ->where('id', $id)
              ->first();
            ?>
            <Form action="{{url('/dosen/'.$id) }}" method="POST">
              @csrf
              <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->
              <input type="hidden" name="id" value="{{$id}}">
              {{method_field('PUT')}}
              <br>
              <label>NIP</label><br>
              <input type="text" class="form-control" name="nip" value="{{$rec->nip }}"><br>

              <label>NAMA DOSEN</label><br>
              <input type="text" class="form-control" name="nama" value="{{$rec->nama }}"><br>

              <label>ALAMAT</label><br>
              <input type="text" class="form-control" name="alamat" value="{{$rec->alamat }}"><br>

              <label>NO HP</label><br>
              <input type="text" class="form-control" name="nohp" value="{{$rec->nohp }}"><br>

              <label for="">JABATAN</label><br>
              <select id="id_jabatan" name="id_jabatan" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                <option value="" selected disabled>Pilih Jabatan</option>
                <?php
                $recJabatan = App\Models\Tbjabatan::all();

                foreach ($recJabatan as $jabatan) {
                  $select = $jabatan->id == $rec->id_jabatan ? 'selected' : '';
                  echo "<option value=\"{$jabatan->id}\" $select>{$jabatan->nama_jabatan}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">PRODI</label><br>
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


              <button type="submit" value="submit" class="btn btn-warning"><i class="fa fa-save"></i> Submit</button> <br>

            </Form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@stop