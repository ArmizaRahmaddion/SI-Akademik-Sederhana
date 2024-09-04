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

                            <form action="{{url('prodi')}}" method="post">
                                @csrf
                                <br>
                                <div class="form-group">
                                    <label for="kode">KODE PRODI</label>
                                    <input type="text" class="form-control" name="kode" id="kode">
                                </div>
                                <div class="form-group">
                                    <label for="nama">NAMA PRODI</label>
                                    <input type="text" class="form-control" name="nama" id="nama">
                                </div>
                                <div class="form-group">
                                    <label for="id_fakultas">FAKULTAS</label>
                                    <select name="id_fakultas" id="id_fakultas" class="form-control">
                                        <option value="" hidden>pilih fakultas</option>
                                        <?php
                                        $rec = App\Models\Tbfakultas::all();

                                        foreach ($rec as $fakultas) {
                                            echo "<option value=\"{$fakultas->id}\">{$fakultas->nama_fakultas}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="id_jenjang">JENJANG</label>
                                    <select name="id_jenjang" id="id_jenjang" class="form-control">
                                        <option value="" hidden>pilih jenjang</option>
                                        <?php
                                        $rec = App\Models\Tbjenjang::all();

                                        foreach ($rec as $jenjang) {
                                            echo "<option value=\"{$jenjang->id}\">{$jenjang->nama_jenjang}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="tglsk">TGL SK</label>
                                    <input type="date" name="tglsk" id="tglsk" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">AKREDITASI:</label>
                                    <select id="akreditasi" name="akreditasi" class="form-control" required>
                                        <option value="">Pilih Akreditasi</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-warning">
                                    <i class="fa fa-save"></i> Submit</button>
                            </form>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </section>
    </div>
    @stop