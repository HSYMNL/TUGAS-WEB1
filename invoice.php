<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nama   = $_POST['nama'] ?? '';
        $model  = $_POST['model'] ?? '';
        $size   = $_POST['size'] ?? '';
        $jumlah = $_POST['jumlah'] ?? 0;
        $kain   = $_POST['kain'] ?? '';

        if ($nama == "" || $model == "" || $size == "" || $kain == "" || $jumlah <= 0) {
            echo "Data pemesanan belum lengkap!";
            exit;
        }

        $hargaKain = [
            "Katun" => 50000,
            "Satin" => 75000,
            "Sutra" => 100000
        ];

        $pengaliUkuran = [
            "S"  => 1.05,
            "M"  => 1.10,
            "L"  => 1.15,
            "XL" => 1.20
        ];

        $hargaDasar   = $hargaKain[$kain];
        $pengali      = $pengaliUkuran[$size];
        $hargaPerPcs  = $hargaDasar * $pengali;
        $totalBayar   = $hargaPerPcs * $jumlah;
    ?>
    <div class="invoice">
        <h2>INVOICE PEMBELIAN KAIN</h2>
        <hr>
            <p><b>Nama Pembeli</b> : <?= $nama ?></p>
            <p><b>Model</b> : <?= $model ?></p>
            <p><b>Ukuran</b> : <?= $size ?></p>
            <p><b>Jenis Kain</b> : <?= $kain ?></p>
            <p><b>Jumlah</b> : <?= $jumlah ?> pcs</p>
        <hr>
            <p>Harga dasar kain : Rp <?= number_format($hargaDasar,0,',','.') ?></p>
            <p>Pengali ukuran : <?= $pengali ?></p>
            <p>Harga per pcs : Rp <?= number_format($hargaPerPcs,0,',','.') ?></p>
        <hr>
        <p class="total">Total Bayar : Rp <?= number_format($totalBayar,0,',','.') ?></p>
    </div>
</body>
</html>