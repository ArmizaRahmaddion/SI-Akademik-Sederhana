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
                        <h3 class="box-title">FORM INPUT DATA TAHUN AKADMEIK</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <a href="{{ url('/tahunakademik/') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back To List
                        </a>
                        <a href="{{url('/')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <Form action="{{url('tahunakademik')}}" method="post">
                            @csrf
                            <br>
                            <label>kode akademik</label>
                            <Input type="text" class="form-control" name="kode_akademik">
                            <br>
                            <label>nama akademik</label>
                            <Input type="text" class="form-control" name="nama_akademik">
                            <br>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-save"></i> Submit
                            </button>
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop