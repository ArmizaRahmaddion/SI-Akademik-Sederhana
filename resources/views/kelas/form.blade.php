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
                        <h3 class="box-title">FORM INPUT DATA KELAS</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <a href="{{ url('/kelas/') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                        <a href="{{url('/')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <Form action="{{url('kelas')}}" method="post">
                            @csrf
                            <br>
                            <div class="form-group">
                                <label for="kode_kelas">KODE KELAS</label>
                                <input type="text" name="kode_kelas" class="form-control" id="kode_kelas">
                            </div>
                            <div class="form-group">
                                <label for="nama_kelas">NAMA KELAS</label>
                                <input type="text" name="nama_kelas" class="form-control" id="nama_kelas">
                            </div>
                            <div class="form-group">
                                <label for="id_tahunakademik">AKADEMIK</label>
                                <select name="id_tahunakademik" id="id_tahunakademik" class="form-control">
                                    <option value="" hidden>pilih Akademik</option>
                                    <?php
                                    $rec = App\Models\Tbtahunakademik::all();

                                    foreach ($rec as $tahunakademik) {
                                        echo "<option value=\"{$tahunakademik->id}\">{$tahunakademik->nama_akademik}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <br>
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