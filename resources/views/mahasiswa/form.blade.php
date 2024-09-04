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

                        <h3 class="box-title">FORM INPUT DATA MAHASISWA</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/mahasiswa')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>

                        <Form action="{{url('mahasiswa')}}" method="post">
                            @csrf
                            <br>
                            <label>Nim</label>
                            <Input type="text" name="nim" class="form-control">
                            <br>
                            <label>Nama</label>
                            <Input type="text" name="nama" class="form-control">
                            <br>
                            <label>Jenis Kelamin</label>
                            <select id="jeniskelamin" name="jeniskelamin" class="bg-body-secondary border-0 rounded-2 p-2 w-25 form-control">
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>

                            <br>
                            <label>prodi </label>
                            <br>
                            <select id="id_prodi" name="id_prodi" class="bg-body-secondary border-0 rounded-2 p-2 w-25 form-control">
                                <option value="" selected disabled>Pilih Prodi</option>
                                <?php
                                $rec = App\Models\Tbprodi::all();
                                foreach ($rec as $prodi) {
                                    echo "<option value=\"{$prodi->id}\">{$prodi->nama}</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <label>dosen PA </label>
                            <br>
                            <select id="id_pa" name="id_pa" class="bg-body-secondary border-0 rounded-2 p-2 w-25 form-control">
                                <option value="" selected disabled>Pilih Dosen PA</option>
                                <?php
                                $rec = App\Models\TbDosen::all();
                                foreach ($rec as $dosenPA) {
                                    echo "<option value=\"{$dosenPA->id}\">{$dosenPA->nama}</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <label>Fakultas </label>
                            <br>
                                <select name="id_fakultas" id="id_fakultas" class="form-control">
                                    <option value="" hidden>pilih fakultas</option>
                                    <?php
                                    $rec = App\Models\Tbfakultas::all();

                                    foreach ($rec as $fakultas) {
                                        echo "<option value=\"{$fakultas->id}\">{$fakultas->nama_fakultas}</option>";
                                    }
                                    ?>
                                </select>
                                <br>
                            <label>no hp</label>
                            <Input type="text" name="nohp" class="form-control">
                            <br>
                            <label>alamat</label>
                            <Input type="text" name="alamat" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-save"></i> Submit
                        </Form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop