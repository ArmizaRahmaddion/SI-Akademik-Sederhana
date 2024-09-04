@extends('tabledefault')
@section('content')
@include('layout.sidebar')

<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data kelas</h3>
                    </div>

                    <div class="box-body">
                        <a href="{{ url('/kelas/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/Admin')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <table id="example2" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>KODE</th>
                                    <th>NAMA KELAS</th>
                                    <th>AKADEMIK</th>
                                    <th colspan="2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $rec = App\Models\Tbkelas::with('tbtahunakademik')->get();
                                $no = 0;
                                foreach ($rec as $key => $value) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td>{{ $no}}</td>
                                        <td>{{ $value->kode_kelas }}</td>
                                        <td>{{ $value->nama_kelas }}</td>
                                        <td>{{ $value->tbtahunakademik->nama_akademik }}</td>

                                        <td><a href="{{url('kelas/'.$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> EDIT</a></td>
                                        <td>
                                            <form action="{{url('kelas/'.$value->id)}}" method="POST">
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

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop