<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Form Input Data Dosen</h1>
        <Form action="{{url('dosen')}}" method="post">
            @csrf
            <label>Nip</label>
            <Input type="text" name="nip">
            <br> 
            <label>Nama</label>   
            <Input type="text" name="nama">
            <br>
            <div class="form-group">
        <label for="id_jabatan">Jabatan</label>
        <select name="id_jabatan" id="id_jabatan" class="form-control">
        <option value="" hidden>pilih jabatan</option>
        <?php
                    $rec = App\Models\Tbjabatan::all();

                    foreach ($rec as $jabatan) {
                        echo "<option value=\"{$jabatan->id}\">{$jabatan->nama_jabatan}</option>";
                    }
                    ?></select></div>
        <br>

            <label>nohp</label>    
            <Input type="text" name="nohp">
            <br>  
            <label>alamat</label>  
            <Input type="text" name="alamat">
            
    <button type="submit">Simpan</button>
</Form>           
    
</body>
</html>