@extends('tabledefault')
@section('content')
<div class="content-wrapper">
    <!-- ... Bagian lainnya tidak berubah ... -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data mahasiswa</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <a href="{{ url('/mahasiswa/create') }}" class="btn btn-primary">
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
                                    <th>NIM</th>
                                    <th>NAMA</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>PRODI</th>
                                    <th>DOSEN PA</th>
                                    <th>FAKULTAS</th>
                                    <th>NO HP</th>
                                    <th>ALAMAT</th>
                                    <th colspan="2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rec = App\Models\TbMahasiswa::with('dosenpa', 'prodi','tbfakultas')
                                    ->get();
                                $no = 0;

                                foreach ($rec as $key => $value) {
                                    $no++ ?>
                                    <tr>
                                        <td>{{ $no}}</td>
                                        <td>{{ $value->nim }}</td>
                                        <td>{{ $value->nama }}</td>
                                        <td>{{ $value->jeniskelamin }}</td>
                                        <td>{{ $value->prodi->nama }}</td>
                                        <td>{{ $value->dosenpa->nama }}</td>
                                        <td>{{ $value->tbfakultas->nama_fakultas }}</td>
                                        <td>{{ $value->nohp }}</td>
                                        <td>{{ $value->alamat }}</td>

                                        <td>
                                            <a href="{{url('mahasiswa/'.$value->id)}}" class="btn btn-success edit-link">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>


                                        <td>
                                            <form action="{{url('mahasiswa/'.$value->id)}}" method="post">
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                                <input type="hidden" name="id" value="{{$value->id}}">
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-danger delete-button" onclick="return confirm('Anda Yakin Menghapus?')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
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
@endsection