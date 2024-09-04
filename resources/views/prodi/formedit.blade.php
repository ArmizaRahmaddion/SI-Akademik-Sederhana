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
                        <h1>Form Input Data Prodi</h1>
                    </div>

                    <div class="box-body">
                        <a href="{{ url('/prodi/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/prodi')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to List
                        </a>
                        <?php
                        $rec = \DB::table('tbprodi')
                            ->where('id', $id)
                            ->first();
                        ?>

                        <form action="{{url('prodi/'.$id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            {{method_field('PUT')}}
                            <br>
                            <label>kode</label>
                            <input type="text" class="form-control" name="kode" value="{{$rec->kode}}">
                            <br>
                            <label>nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$rec->nama}}">
                            <br>
                            <label>tglsk</label>
                            <input type="date" class="form-control" name="tglsk" value="{{$rec->tglsk}}">
                            <br>
                            <label>akreditasi</label>
                            <input type="text" class="form-control" name="akreditasi" value="{{$rec->akreditasi}}">
                            <br>
                            <label>fakultas</label>
                            <select name="id_fakultas " id="id_fakultas " class="form-control">
                                <?php
                                $recFakultas = App\Models\Tbfakultas::all();
                                foreach ($recFakultas as $fakultas) {
                                    $select = $fakultas->id == $rec->id_fakultas ? 'selected' : '';
                                    echo "<option value=\"{$fakultas->id}\" $select>{$fakultas->nama_fakultas}</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <label>jenjang</label>
                            <select name="id_jenjang" id="id_jenjang" class="form-control">
                                <?php
                                $recJenjang = App\Models\Tbjenjang::all();
                                foreach ($recJenjang as $jenjang) {
                                    $select = $jenjang->id == $rec->id_jenjang ? 'selected' : '';
                                    echo "<option value=\"{$jenjang->id}\" $select>{$jenjang->nama_jenjang}</option>";
                                }
                                ?>
                            </select>
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