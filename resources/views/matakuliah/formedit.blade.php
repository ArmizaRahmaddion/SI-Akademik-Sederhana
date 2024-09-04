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
                        <?php
                        $rec = DB::table('tbmatakuliah')
                            ->where('id', $id)
                            ->first();
                        ?>
                        <form action="{{url('matakuliah/'.$id)}}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="id" value="{{$id}}">
                            {{method_field('PUT')}}
                            <br>
                            <label>sks</label>
                            <input type="text" class="form-control" name="sks" value="{{$rec->sks}}">
                            <br>
                            <label>jam</label>
                            <input type="text" class="form-control" name="jam" value="{{$rec->jam}}">
                            <br>
                            <label>kode</label>
                            <input type="text" class="form-control" name="kode" value="{{$rec->kode}}">
                            <br>
                            <label>ruangan</label>
                            <input type="text" class="form-control" name="ruangan" value="{{$rec->ruangan}}">
                            <br>
                            <label>hari</label>
                            <input type="text" class="form-control" name="hari" value="{{$rec->hari}}">
                            <br>

                            <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop