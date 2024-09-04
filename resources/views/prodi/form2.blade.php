@include('layout.sidebar')
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
            padding: 10px;
            margin-top: 20px;
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
    <h1>Form Input Data Prodi</h1>
    <form action="{{url('/prodi')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="kode">KODE PRODI</label>
        <input type="text" name="kode" id="kode">
        </div>
        <div class="form-group">
        <label for="nama">NAMA PRODI</label>
        <input type="text" name="nama" id="nama">
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
                    ?></select></div>
        <br>
        <div class="form-group">
        <label for="id_jenjang">JENJANG</label>
        <select name="id_jenjang" id="id_jenjang" class="form-control">
        <option value="" hidden>pilih jenjang</option>
        <?php
                    $rec = App\Models\Tbjenjang::all();

                    foreach ($rec as $jenjang) {
                        echo "<option value=\"{$jenjang->id}\">{$jenjang->nama_jenjang}</option>";
                    }
                    ?></select></div>
        <br>
        <div class="form-group">
        <label for="tglsk">TGL SK</label>
        <input type="text" name="tglsk" id="tglsk">
        </div>
        <div class="form-group">
        <label for="akreditasi">AKREDITASI:</label>
        <select id="akreditasi" name="akreditasi" required>
        <option value="">Pilih Akreditasi</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        </select>
        </div>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>