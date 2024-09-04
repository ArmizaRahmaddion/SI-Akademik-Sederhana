@extends('tabledefault')
@section('content')
@include('layout.sidebar')

<div class="content-wrapper">
    <!-- ... Bagian lainnya tidak berubah ... -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data tahunakademik</h3>
                    </div><!-- /.box-header -->


                    <div class="box-body">
                        <a href="{{ url('/tahunakademik/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/Admin')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <table id="example2" class="table table-bordered table-hover">
                            <!-- ... Bagian lainnya tidak berubah ... -->
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>KODE</th>
                                    <th>NAMA</th>
                                    <th colspan="2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                use Illuminate\Support\Facades\DB;

                                $rec = DB::table('Tbtahunakademik')->get();
                                $no = 0;

                                foreach ($rec as $key => $value) {
                                    $no++ ?>

                                    <tr>
                                        <td>{{ $no}}</td>
                                        <td>{{ $value->kode_akademik }}</td>
                                        <td>{{ $value->nama_akademik }}</td>

                                        <td><a href="{{url('tahunakademik/'.$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a></td>
                                        <!-- <td>
                                            <a href="{{url('deletetahunakademik/'.$value->id)}}">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                        </td> -->

                                        <td>
                                            <form action="{{url('tahunakademik/'.$value->id)}}" method="post">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                {{method_field('DELETE')}}
                                                <button type="submit" onclick="return confirm('Anda Yakin Menghapus?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <!-- ... Bagian lainnya tidak berubah ... -->
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
@stop