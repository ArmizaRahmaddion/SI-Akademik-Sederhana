<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Tables</title>

<!-- Add your external stylesheets here, if any -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">FORM INPUT DATA DOSEN</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <a href="{{ url('/dosen/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/dosen')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                        <form action="{{url('dosen')}}" method="post">
                            @csrf
                            <br>
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" name="nip" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="id_jabatan">Jabatan</label>
                                <select name="id_jabatan" id="id_jabatan" class="form-control">
                                    <option value="" hidden>pilih jabatan</option>
                                    <?php
                                    $rec = App\Models\Tbjabatan::all();
                                    foreach ($rec as $jabatan) {
                                        echo "<option value=\"{$jabatan->id}\">{$jabatan->nama_jabatan}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nohp">No. HP</label>
                                <input type="text" name="nohp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="id_prodi">prodi</label>
                                <select id="id_prodi" name="id_prodi" class="bg-body-secondary border-0 rounded-2 p-2 w-25 form-control">
                                    <option value="" selected disabled>Pilih Prodi</option>
                                    <?php
                                    $rec = App\Models\Tbprodi::all();
                                    foreach ($rec as $prodi) {
                                        echo "<option value=\"{$prodi->id}\">{$prodi->nama}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-save"></i> Simpan
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop