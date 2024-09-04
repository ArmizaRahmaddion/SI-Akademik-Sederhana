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
                        <?php
                        $rec = DB::table('tbkelas')
                            ->where('id', $id)
                            ->first();

                        ?>
                        <form action="{{url('kelas/'.$id)}}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="id" value="{{$id}}">
                            {{method_field('PUT')}}
                            <br>
                            <label for="kode_kelas">KODE</label>
                            <input type="text" name="kode_kelas" id="kode_kelas" class="form-control" value="{{$rec->kode_kelas}}">
                            <br>
                            <label for="nama_kelas">NAMA</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" value="{{$rec->nama_kelas}}">
                            <br>
                            <label for="id_tahunakademik">AKADEMIK</label>
                            <select id="id_tahunakademik" name="id_tahunakademik" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                                <option value="" selected disabled>Pilih Dekan</option>
                                <?php
                                $recTA = App\Models\Tbtahunakademik::all();
                                foreach ($recTA as $tahunakademik) {
                                    $select = $tahunakademik->id == $rec->id_tahunakademik ? 'selected' : '';
                                    echo "<option value=\"{$tahunakademik->id}\" $select>{$tahunakademik->nama_akademik}</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-save"></i> Simpan
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop