@extends('tabledefault')
@include('layout.sidebar')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Jadwal
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data Jadwal</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h2>Form Input Jadwal</h2>
                    </div><!-- /.box-header -->
                    <table id="example1" class="table ">
                        <div class="box-body">


                            <form action="{{ url('Jadwal') }}" method="post">
                                @csrf
                                <label for="id_hari">Hari:</label>
                                <select id="id_hari" name="id_hari" class="form-control" required>
                                    <option value="" hidden>Pilih Hari</option>
                                    <?php
                                            $rec = App\Models\tbhari::all();
                                            foreach ($rec as $hari) {
                                                echo "<option value=\"{$hari->id}\">{$hari->hari}</option>";
                                            }
                                        ?>
                                </select>


                                <label for="id_ruangan">Ruangan:</label>
                                <select id="id_ruangan" name="id_ruangan" class="form-control" required>
                                    <option value="" hidden>Pilih Ruangan</option>
                                    <?php
                                            $rec = App\Models\Tbruangan::all();
                                            foreach ($rec as $ruangan) {
                                                echo "<option value=\"{$ruangan->id}\">{$ruangan->nama}</option>";
                                            }
                                        ?>
                                </select>

                                <label for="id_dosen">Dosen:</label>
                                <select id="id_dosen" name="id_dosen" class="form-control" required>
                                    <option value="" hidden>Pilih Dosen</option>
                                    <?php
                                            $rec = App\Models\tbdosen::all();
                                            foreach ($rec as $dosen) {
                                                echo "<option value=\"{$dosen->id}\">{$dosen->nama}</option>";
                                            }
                                        ?>
                                </select>

                                <label for="id_kelas">Kelas:</label>
                                <select id="id_kelas" name="id_kelas" class="form-control" required>
                                    <option value="" hidden>Pilih Kelas</option>
                                    <?php
                                            $rec = App\Models\tbkelas::all();
                                            foreach ($rec as $kelas) {
                                                echo "<option value=\"{$kelas->id}\">{$kelas->nama_kelas}</option>";
                                            }
                                        ?>
                                </select>

                                <label for="id_matakuliah">Matakuliah:</label>
                                <select id="id_matakuliah" name="id_matakuliah" class="form-control" required>
                                    <option value="" hidden>Pilih Matakuliah</option>
                                    <?php
                                            $rec = App\Models\Tbmatakuliah::all();
                                            foreach ($rec as $matkul) {
                                                echo "<option value=\"{$matkul->id}\">{$matkul->nama}</option>";
                                            }
                                        ?>
                                </select>

                                <label for="id_tahunakademik">Tahun Akademik:</label>
                                <select id="id_tahunakademik" name="id_tahunakademik" class="form-control" required>
                                    <option value="" hidden>Pilih Tahun Akademik</option>
                                    <?php
                                            $rec = App\Models\tbtahunakademik::all();
                                            foreach ($rec as $tahunakademik) {
                                                echo "<option value=\"{$tahunakademik->id}\">{$tahunakademik->nama_akademik}</option>";
                                            }
                                        ?>
                                </select>

                                <label for="">Jam Masuk:</label>
                                <input type="time" name="jammasuk" id="jammasuk" class="form-control">

                                <label for="">Jam Keluar:</label>
                                <input type="time" name="jamkeluar" id="jamkeluar" class="form-control">

                                <button type="submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@stop