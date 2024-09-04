<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: right;
        }

        th {
            background-color: #f2f2f2;
        }

        .add-data {
            float: right;
            margin-top: 8px;
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
    <a href="{{url('/')}}">Ke Menu Utama</a>
        <h2>Data Kelas</h2>
        
        <a href="{{url('/kelas/create')}}" class="add-data btn btn-primary my-2">Tambah Data</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>AKADEMIK</th>
                    <th colspan="2">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
               $rec = App\Models\Tbkelas::with('tbtahunakademik')->get();
               foreach ($rec as $key => $value) {
                   ?>
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->kode_kelas }}</td>
                    <td>{{ $value->nama_kelas }}</td>
                    <td>{{ $value->tbtahunakademik->nama_akademik }}</td>
                    
                    
                    <td><a href="{{url('kelas/'.$value->id)}}">EDIT</a></td>
                    <td>
                    <form action="{{url('kelas/'.$value->id)}}" method="POST">
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