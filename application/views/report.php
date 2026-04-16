<!DOCTYPE html>
<html>

<head>
    <title>Hasil Input Form Dinamis</title>
</head>

<body>

    <h1>Daftar Produk yang Diinput</h1>

    <?php if (!empty($lokasi)): ?>
        <ul>
            <?php
            foreach ($lokasi as $nama):
            ?>
                <li><?php echo htmlspecialchars($nama); ?></li>
            <?php endforeach; ?>
            <?php
            foreach ($kegiatan as $k) :
            ?>
                <li><?php echo htmlspecialchars($k); ?></li>
            <?php endforeach; ?>
            <?php
            foreach ($keterangan as $keterangan) : ?>
                <li><?php echo htmlspecialchars($keterangan) ?></li>
            <?php endforeach; ?>
            <li><img src="<?= base_url('uploads/' . $kop_surat) ?>" alt=""></li>
            <li><?php echo ($nama_pekerjaan) ?></li>
            <li><?php echo ($nomor) ?></li>
            <li><?php echo ($tanggal) ?></li>
            <li><?php echo ($nama_pekerjaan) ?></li>
            <li><?php echo ($nama_perusahaan) ?></li>
            <li><?php echo ($vendor) ?></li>
            <li><?php echo ($manager) ?></li>
            <li><?php echo ($pengawas) ?></li>
            <?php foreach ($file_00 as $file) : ?>
                <li><img src="<?= base_url('uploads/' . $file) ?>" alt=""></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Tidak ada produk yang diinput.</p>
    <?php endif; ?>

</body>

</html>