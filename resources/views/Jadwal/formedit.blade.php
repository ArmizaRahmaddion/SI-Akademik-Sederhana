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
            <h3 class="box-title">Form Edit Data Jadwal</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <a href="{{ url('/Jadwal/create') }}" class="btn btn-primary">
              <i class="fas fa-plus"></i> Tambah Data
            </a>
            <a href="{{url('/Jadwal')}}" class="btn btn-primary">
              <i class="fas fa-arrow-left"></i> Back to List
            </a>
            <?php
            $rec = App\Models\Tbjadwal::with('tbhari')
              ->where('id', $id)
              ->first();
            ?>
            <Form action="{{url('Jadwal/'.$id) }}" method="POST">
              @csrf
              <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->
              <input type="hidden" name="id" value="{{$id}}">
              {{method_field('PUT')}}
              <br>
              <label for="">Hari</label><br>
              <select id="id_hari" name="id_hari" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                <option value="" selected disabled>Pilih Hari</option>
                <?php
                $recHari = App\Models\Tbhari::all();

                foreach ($recHari as $hari) {
                  $select = $hari->id == $rec->id_hari ? 'selected' : '';
                  echo "<option value=\"{$hari->id}\" $select>{$hari->hari}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">Ruangan</label><br>
              <select id="id_ruangan" name="id_ruangan" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                <option value="" selected disabled>Pilih Ruangan</option>
                <?php
                $recRuangan = App\Models\Tbruangan::all();

                foreach ($recRuangan as $ruangan) {
                  $select = $ruangan->id == $rec->id_ruangan ? 'selected' : '';
                  echo "<option value=\"{$ruangan->id}\" $select>{$ruangan->nama}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">Dosen</label><br>
              <select id="id_dosen" name="id_dosen" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                <option value="" selected disabled>Pilih Ruangan</option>
                <?php
                $recDosen = App\Models\Tbdosen::all();

                foreach ($recDosen as $dosen) {
                  $select = $dosen->id == $rec->id_dosen ? 'selected' : '';
                  echo "<option value=\"{$dosen->id}\" $select>{$dosen->nama}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">Kelas</label><br>
              <select id="id_kelas" name="id_kelas" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                <option value="" selected disabled>Pilih Kelas</option>
                <?php
                $recKelas = App\Models\Tbkelas::all();

                foreach ($recKelas as $kelas) {
                  $select = $kelas->id == $rec->id_kelas ? 'selected' : '';
                  echo "<option value=\"{$kelas->id}\" $select>{$kelas->nama_kelas}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">Mata Kuliah</label><br>
              <select id="id_matakuliah" name="id_matakuliah" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                <option value="" selected disabled>Pilih Matakuliah</option>
                <?php
                $recMatakuliah = App\Models\Tbmatakuliah::all();

                foreach ($recMatakuliah as $matakuliah) {
                  $select = $matakuliah->id == $rec->id_matakuliah ? 'selected' : '';
                  echo "<option value=\"{$matakuliah->id}\" $select>{$matakuliah->nama}</option> ";
                }
                ?>
              </select>
              <br>
              <label for="">Tahun Akademik</label><br>
              <select id="id_tahunakademik" name="id_tahunakademik" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                <option value="" selected disabled>Pilih Tahun Akademik</option>
                <?php
                $recTahunakademik = App\Models\Tbtahunakademik::all();

                foreach ($recTahunakademik as $tahunakademik) {
                  $select = $tahunakademik->id == $rec->id_tahunakademik ? 'selected' : '';
                  echo "<option value=\"{$tahunakademik->id}\" $select>{$tahunakademik->nama_akademik}</option> ";
                }
                ?>
              </select>
              <br>
              <label>Jam Massuk</label><br>
              <input type="time" class="form-control" name="jammasuk" value="{{$rec->jammasuk }}"><br>
              <label>Jam Keluar</label><br>
              <input type="text" class="form-control" name="jamkeluar" value="{{$rec->jamkeluar }}"><br>
              


              <button type="submit" value="submit" class="btn btn-warning"><i class="fa fa-save"></i> Submit</button> <br>

            </Form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@stop