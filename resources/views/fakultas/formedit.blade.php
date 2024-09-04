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
                        <?php
                        $rec = DB::table('tbfakultas')
                            ->where('id', $id)
                            ->first();
                        ?>
                        <h1>Form Edit Data fakultas</h1>
                        <form action="{{url('fakultas/'.$id)}}" method="POST">
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <input type="hidden" name="id" value="{{$id}}">
                            {{method_field('PUT')}}
                            <label>Kode</label>
                            <input type="text" class="form-control" name="kode_fakultas" value="{{$rec->kode_fakultas}}">
                            <br>
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_fakultas" value="{{$rec->nama_fakultas}}">
                            <br>
                            <label>Dekan</label>
                            <select id="id_dekan" name="id_dekan" class="bg-body-secondary border-0 rounded-2 p-2 form-control">
                                <option value="" selected disabled>Pilih Dekan</option>
                                <?php
                                $recDekan = App\Models\Tbdosen::whereHas('Tbjabatan', function ($query) {
                                    $query->where('nama_jabatan', 'Dekan');
                                })->get();
                                foreach ($recDekan as $dekan) {
                                    $select = $dekan->id == $rec->id_dekan ? 'selected' : '';
                                    echo "<option value=\"{$dekan->id}\" $select>{$dekan->nama}</option>";
                                }
                                ?>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> EDIT DATA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop