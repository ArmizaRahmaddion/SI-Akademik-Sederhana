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
                        <h3 class="box-title">FORM INPUT DATA RUANGAN</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <a href="{{ url('/ruangan/') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back To List
                        </a>
                        <a href="{{url('/')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <Form action="{{url('ruangan')}}" method="post">
                            @csrf
                            <br>
                            <div class="form-group">
                                <label for="kode">KODE RUANGAN</label>
                                <input type="text" name="kode" id="kode" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">NAMA RUANGAN</label>
                                <input type="text" name="nama" id="nama" class="form-control" required>
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