<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 8px;
            margin-top: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            max-width: 200px;
            margin: 10px;
        }
        label {
            font-weight: bold;
        }
        button {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Form Input Data Kelas</h1>
    <form action="{{url('/kelas')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="kode_kelas">KODE</label>
        <input type="text" name="kode_kelas" id="kode_kelas">
        </div>
        <div class="form-group">
        <label for="nama_kelas">NAMA</label>
        <input type="text" name="nama_kelas" id="nama_kelas">
        </div>
        <div class="form-group">
        <label for="id_tahunakademik">AKADEMIK</label>
        <select name="id_tahunakademik" id="id_tahunakademik" class="form-control">
        <option value="" hidden>pilih Akademik</option>
        <?php
                    $rec = App\Models\Tbtahunakademik::all();

                    foreach ($rec as $tahunakademik) {
                        echo "<option value=\"{$tahunakademik->id}\">{$tahunakademik->nama_akademik}</option>";
                    }
                    ?></select></div>
        <br>
        <button type="submit">Simpan</button>
    </form>
    </form>
</body>
</html>