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
                        <h1>Form Input Data matakuliah</h1>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/matakuliah/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/matakuliah')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                        <Form action="{{url('matakuliah')}}" method="post">
                            @csrf
                            <br>
                            <label>sks</label>
                            <Input type="text" class="form-control" name="sks" id="sks">
                            <br>
                            <label>jam</label>
                            <Input type="text" class="form-control" name="jam" id="jam">
                            <label>nama</label>
                            <Input type="text" class="form-control" name="nama" id="nama">
                            <br>
                            <label>kode</label>
                            <Input type="text" class="form-control" name="kode" id="kode">
                            <br>
                            <label>ruangan</label>
                            <Input type="text" class="form-control" name="ruangan" id="ruangan">
                            <br>
                            <label>hari</label>
                            <Input type="text" class="form-control" name="hari" id="hari">
                            <br>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-save"></i> Simpan
                        </Form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop