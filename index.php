<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitung Diskon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .container {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .input, button {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Penghitung Diskon</h2>
        <label for="harga">Harga Awal (Rp):</label>
        <input type="number" id="harga" placeholder="Masukkan harga awal">
        
        <label for="diskon">Diskon (%):</label>
        <input type="number" id="diskon" placeholder="Masukkan persen diskon">
        
        <button onclick="hitungDiskon()">Hitung</button>
        
        <h3 id="hasil">Harga Setelah Diskon: Rp 0</h3>
    </div>
    
    <script>
        function hitungDiskon() {
            let harga = parseFloat(document.getElementById('harga').value);
            let diskon = parseFloat(document.getElementById('diskon').value);
            
            if (isNaN(harga) || isNaN(diskon)) {
                alert("Masukkan angka yang valid!");
                return;
            }
            
            let potongan = (diskon / 100) * harga;
            let hargaSetelahDiskon = harga - potongan;
            
            document.getElementById('hasil').innerText = `Harga Setelah Diskon: Rp ${hargaSetelahDiskon.toFixed(2)}`;
        }
    </script>
</body>
</html>
