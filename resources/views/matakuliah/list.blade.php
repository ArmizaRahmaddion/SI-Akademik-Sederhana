@extends('tabledefault')
@section('content')
@include('layout.sidebar')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


<div class="content-wrapper">
    <!-- ... Bagian lainnya tidak berubah ... -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data matakuliah</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <a href="{{ url('/matakuliah/create') }}" class="btn btn-primary">
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
                                    <th>SKS</th>
                                    <th>JAM</th>
                                    <th>NAMA</th>
                                    <th>KODE</th>
                                    <th>RUANGAN</th>
                                    <th>HARI</th>
                                    <th colspan="2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rec = DB::table('tbmatakuliah')
                                    ->get();
                                $no = 0;

                                foreach ($rec as $key => $value) {
                                    $no++ ?>

                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $value->sks }}</td>
                                        <td>{{ $value->jam }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->kode }}</td>
                                        <td>{{ $value->ruangan }}</td>
                                        <td>{{ $value->hari }}</td>

                                        <td><a class="btn btn-success" href="{{ url('matakuliah/'.$value->id) }}"><i class="fas fa-edit"></i> Edit</a></td>
                                        <!-- <td><a class="btn btn-danger" href="{{ url('deletematakuliah/'.$value->id) }}" ><i class="fas fa-trash-alt"></i> Delete</a></td> -->

                                        <td>
                                            <form action="{{ url('matakuliah/'.$value->id) }}" method="post">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                <input type="hidden" name="id" value="{{ $value->id }}" onclick="return confirm('Anda Yakin Menghapus?')">
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</button>
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