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
                        <h3 class="box-title">Data Dosen</h3>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <a href="{{ url('/dosen/create') }}" class="btn btn-primary">
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
                                    <th>NIP</th>
                                    <th>NAMA</th>
                                    <th>JABATAN</th>
                                    <th>NO HP</th>
                                    <th>ALAMAT</th>
                                    <th>PRODI</th>
                                    <th colspan="2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rec = App\Models\Tbdosen::with('tbjabatan')->get();
                                $no = 0;

                                foreach ($rec as $key => $value) {
                                    $no++ ?>
                                    <tr>
                                        
                                        <td>{{ $no}}</td>
                                        <td>{{ $value->nip }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->tbjabatan->nama_jabatan }}</td>
                                        <td>{{ $value->nohp }}</td>
                                        <td>{{ $value->alamat }}</td>
                                        <td>{{ $value->prodi->nama }}</td>
                                        <td class="action-icons">
                                            <a href="{{url('dosen/'.$value->id)}}" class="btn btn-success">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{url('dosen/'.$value->id)}}" method="post">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger delete-button" onclick="return confirm('Anda Yakin Menghapus?')">
                                                    <i class="fas fa-trash"></i> Delete

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