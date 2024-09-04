<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjumlahan</title>
</head>

<body>
    <h1>Penjumlahan</h1>
    <p>Masukkan dua angka untuk ditambahkan:</p>
    <input type="text" id="angka1">
    <input type="text" id="angka2">
    <button onclick="penjumlahan()">Hitung</button>
    <p>Hasil penjumlahan:</p>
    <p id="hasil"></p>

    <script>
    function penjumlahan() {
        var angka1 = parseFloat(document.getElementById("angka1").value);
        var angka2 = parseFloat(document.getElementById("angka2").value);

        if (!isNaN(angka1) && !isNaN(angka2)) {
            var hasil = angka1 + angka2;
            document.getElementById("hasil").textContent = "Hasil penjumlahan: " + hasil;
        } else {
            alert("Masukkan angka yang valid.");
        }
    }
    </script>
    <a href="{{url('/')}}">Ke Menu Utama</a>


</body>

</html>