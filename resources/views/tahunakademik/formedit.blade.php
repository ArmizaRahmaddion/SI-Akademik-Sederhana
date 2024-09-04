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

                        <?php
                        $rec = DB::table('tbtahunakademik')
                            ->where('id', $id)
                            ->first();

                        ?>


                        <h1>Form Edit Data matakuliah</h1>
                        <form action="{{url('tahunakademik/'.$id)}}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="id" value="{{$id}}">
                            {{method_field('PUT')}}
                            <label>kode akademik</label>
                            <input type="text" name="kode_akademik" class="form-control" value="{{$rec->kode_akademik}}">
                            <br>
                            <label>nama akademik</label>
                            <input type="text" name="nama_akademik" class="form-control" value="{{$rec->nama_akademik}}">
                            <br>

                            <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> EDIT DATA</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop