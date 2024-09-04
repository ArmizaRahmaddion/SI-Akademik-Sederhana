<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Prodi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 4px;
            text-align: right;
        }

        th {
            background-color: #f2f2f2;
        }

        .add-data {
            float: right;
            margin-top: 8px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{url('/')}}">Ke Menu Utama</a>
        <h2>Data Prodi</h2>
        <a href="{{url('/prodi/create')}}" class="add-data btn btn-primary">Tambah Data</a>
        <table class="table table-bordered">
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
                foreach ($rec as $key => $value) {
                ?>
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $value->kode }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->tglsk }}</td>
                        <td>{{ $value->akreditasi }}</td>
                        <td>{{ $value->tbfakultas->nama_fakultas }}</td>
                        <td>{{ $value->tbjenjang->nama_jenjang }}</td>


                        <td><a href="{{url('prodi/'.$value->id)}}">EDIT</a></td>

                        <td>
                            <form action="{{url('prodi/'.$value->id)}}" method="POST">
                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <input type="hidden" name="id" value="{{$value->id}}">
                                {{method_field('DELETE')}}
                                <button type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>