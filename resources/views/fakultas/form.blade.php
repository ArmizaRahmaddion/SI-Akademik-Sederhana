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
                        <a href="{{ url('/fakultas/') }}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back To List
                        </a>
                        <a href="{{url('/')}}" class="btn btn-primary">
                            <i class="fas fa-arrow-left"></i> Back to Dashboard
                        </a>
                        <h1>Form Input Data Fakultas</h1>
                        <Form action="{{url('fakultas')}}" method="post">
                            @csrf
                            <label>kode_fakultas</label>
                            <Input type="text" class="form-control" name="kode_fakultas" id="kode_fakultas">
                            <br>
                            <label>nama_fakultas</label>
                            <Input type="text" class="form-control" name="nama_fakultas" id="nama_fakultas">
                            <br>
                            <div class="form-group">
                                <label for="id_dekan">Dekan</label>
                                <select name="id_dekan" id="id_dekan" class="form-control">
                                    <option value="" hidden>Pilih Dekan</option>
                                    <?php
                                    $rec = App\Models\Tbdosen::whereHas('tbjabatan', function ($query) {
                                        $query->where('nama_jabatan', 'Dekan');
                                    })->get();


                                    foreach ($rec as $dekan) {
                                        echo "<option value=\"{$dekan->id}\">{$dekan->nama}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-warning"><i class="fa fa-save"></i> Submit</button>
                        </Form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop