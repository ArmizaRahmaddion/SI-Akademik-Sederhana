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
    <h1>Form Input Data matakuliah</h1>
        <Form action="{{url('matakuliah')}}" method="post">
            @csrf
            <label>sks</label>
            <Input type="text" name="sks" id="sks">
            <br> 
            <label>jam</label>   
            <Input type="text" name="jam" id="jam">
            <br>
            <label>kode</label>    
            <Input type="text" name="kode" id="kode">
            <br>  
            <label>ruangan</label>  
            <Input type="text" name="ruangan" id="ruangan">
            <br>
            <label>hari</label>  
            <Input type="text" name="hari" id="hari">
            
    <button type="submit">Simpan</button>
</Form>           
    
</body>
</html>