@extends('tabledefault')
@section('content')
@include('layout.sidebar')

<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data prodi</h3>
                    </div>
                    <div class="box-body">
                        <a href="{{ url('/prodi/create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Tambah Data
                        </a>
                        <a href="{{url('/Admin')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <table id="example2" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>KODE PRODI</th>
                                    <th>NAMA PRODI</th>
                                    <th>TGL SK</th>
                                    <th>AKREDITASI</th>
                                    <th>FAKULTAS</th>
                                    <th>JENJANG</th>
                                    <th colspan="2">
                                        <center>AKSI
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rec = App\Models\Tbprodi::with('tbfakultas', 'tbjenjang')->get();
                                $no = 0;
                                foreach ($rec as $key => $value) {
                                    $no++
                                ?>
                                    <tr>
                                        <td>{{ $no}}</td>
                                        <td>{{ $value->kode }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->tglsk }}</td>
                                        <td>{{ $value->akreditasi }}</td>
                                        <td>{{ $value->tbfakultas->nama_fakultas }}</td>
                                        <td>{{ $value->tbjenjang->nama_jenjang }}</td>



                                        <td>
                                            <a href="{{ url('prodi/'.$value->id) }}" class="btn btn-success">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>

                                        <td>
                                            <form action="{{ url('prodi/'.$value->id) }}" method="POST">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                <input type="hidden" name="id" value="{{ $value->id }}">
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus?')">
                                                    <i class="fas fa-trash-alt"></i> Delete
                                                </button>
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