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
                        <h3 class="box-title">Data ruangan</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <a href="{{ url('/ruangan/create') }}" class="btn btn-primary">
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
                                    <th>KODE RUANGAN</th>
                                    <th>NAMA RUANGAN</th>
                                    <th colspan="2">
                                        <center>AKSI
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rec = DB::table('tbruangan')->get();
                                foreach ($rec as $key => $value) {
                                ?>
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->kode ? $value->kode : '-' }}</td>
                                        <td>{{ $value->nama ? $value->nama : '-' }}</td>
                                        <td><a href="{{url('ruangan/'.$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> EDIT</a></td>

                                        <td>
                                            <form action="{{url('ruangan/'.$value->id)}}" method="POST">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus?')"><i class="fas fa-trash-alt"></i> DELETE</button>
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