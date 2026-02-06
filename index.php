<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Kain</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Pembelian Kain</h2>
    <p class="desc">
        Silakan lengkapi data pemesanan kain sesuai model, ukuran, dan jenis kain yang diinginkan.
    </p>

    <form action="invoice.php" method="post">

        <label>Nama Pembeli:</label>
        <input type="text" name="nama" required>

        <label>Model Kain:</label>
        <select name="model" required>
            <option value="">-- Pilih Model --</option>
            <option value="Kemeja SD">Kemeja SD</option>
            <option value="Kemeja SMP">Kemeja SMP</option>
            <option value="Kemeja SMA">Kemeja SMA</option>
            <option value="Rok">Rok</option>
            <option value="Celana">Celana</option>
        </select>

        <label>Ukuran:</label>
        <div class="radio-group">
            <label><input type="radio" name="size" value="S" required> S</label>
            <label><input type="radio" name="size" value="M"> M</label>
            <label><input type="radio" name="size" value="L"> L</label>
            <label><input type="radio" name="size" value="XL"> XL</label>
        </div>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" min="1" required>

        <label>Jenis Kain:</label>
        <div class="kain-group">
            <label class="kain">
                <input type="radio" name="kain" value="Katun" required>
                <img src="images/kain-katun.jpeg">
                Katun
            </label>

            <label class="kain">
                <input type="radio" name="kain" value="Satin">
                <img src="images/kain-satin.jpeg">
                Satin
            </label>

            <label class="kain">
                <input type="radio" name="kain" value="Sutra">
                <img src="images/kain-sutra.jpeg">
                Sutra
            </label>
        </div>

        <button type="submit">Proses Pembelian</button>
    </form>
</div>

</body>
</html>
