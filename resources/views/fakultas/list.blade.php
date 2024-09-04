@extends('tabledefault')
@section('content')
@include('layout.sidebar')

<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data fakultas</h3>
                    </div>

                    <div class="box-body">
                        <a href="{{ url('/fakultas/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/Admin')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <table id="example2" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>kode_fakultas</th>
                                    <th>nama_fakultas</th>
                                    <th>dekan</th>
                                    <th colspan="2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rec = App\Models\Tbfakultas::with('tbdosen')->get();
                                $no = 0;

                                foreach ($rec as $key => $value) {
                                    $no++ ?>

                                    <tr>
                                        <td>{{ $no}}</td>
                                        <td>{{ $value->kode_fakultas }}</td>
                                        <td>{{ $value->nama_fakultas }}</td>
                                        <td>{{ $value->tbdosen->nama }}</td>



                                        <td><a href="{{url('fakultas/'.$value->id)}}" class="btn btn-success"><i class="fas fa-edit"></i> Edit</td>
                                        <!-- <td><a href="{{url('deletefakultas/'.$value->id)}}" onclick="return confirm('Anda Yakin Menghapus?')">Delete</td> -->

                                        <td>
                                            <form action="{{url('fakultas/'.$value->id)}}" method="post">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                {{method_field('DELETE')}}

                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus?')"><i class="fas fa-trash"></i> Hapus</button>
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