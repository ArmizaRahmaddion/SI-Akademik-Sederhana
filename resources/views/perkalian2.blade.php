<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Perkalian</title>
</head>

<body>
    <h1>Perkalian</h1>
    <p>Masukkan dua angka untuk dikalikan:</p>
    <input type="text" id="angka1">
    <input type="text" id="angka2">
    <button onclick="perkalian()">Hitung</button>
    <p>Hasil perkalian:</p>
    <p id="hasil"></p>

    <script>
    function perkalian() {
        var angka1 = parseFloat(document.getElementById("angka1").value);
        var angka2 = parseFloat(document.getElementById("angka2").value);

        if (!isNaN(angka1) && !isNaN(angka2)) {
            var hasil = angka1 * angka2;
            document.getElementById("hasil").textContent = "Hasil perkalian: " + hasil;
        } else {
            alert("Masukkan angka yang valid.");
        }
    }
    </script>
    <a href="{{url('/')}}">Ke Menu Utama</a>

</body>

</html>