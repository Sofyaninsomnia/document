<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 5mm;
            font-size: 11px;
        }

        .header h3 {
            margin: 2px 0;
            font-size: 14px;
            text-align: center;
        }

        .header img {
            height: 50px;
            width: auto;
            margin-bottom: 5px;
        }

        .info-table {
            margin-bottom: 5px;
            width: 100%;
        }

        .info-table td {
            padding: 1px 0;
        }

        .info-table td:first-child {
            width: 100px;
            font-weight: bold;
        }

        .progress-table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            font-size: 12px;
        }

        .progress-table th,
        .progress-table td {
            border: 1px solid #000;
            padding: 6px 8px;
            vertical-align: middle;
            text-align: center;
        }

        .progress-table th {
            background: #f2f2f2;
        }

        .col-no {
            text-align: center;
        }

        .col-lokasi {
            text-align: left;
            padding-left: 12px;
        }

        .col-kegiatan {
            text-align: left;
            padding-left: 12px;
        }

        .photo-cell {
            width: 100%;
            height: 120px;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .photo-cell img {
            max-width: 100%;
            max-height: 100%;
            width: 200px;
            height: 200px;
            display: block;
            margin: 0 auto;
        }

        .col-keterangan {
            white-space: normal;
            word-wrap: break-word;
            text-align: left;
            padding-left: 10px;
            padding-right: 10px;
        }

        .col-keterangan .keterangan-text {
            font-size: 11px;
        }

        .progress-table th,
        .progress-table td {
            padding: 6px 6px;
        }

        .signature-wrapper {
            display: flex;
            justify-content: space-between;
            margin-top: 60px;
            width: 100%;
        }

        .signature-box {
            width: 15%;
            position: relative;
        }

        .signature-company {

            font-size: 13px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }

        .signature-line {
            width: 80%;
            border-top: 1px solid #000;
            margin: 30px auto 5px;
        }

        .signature-name {

            text-align: center;
            font-size: 13px;
            margin-top: 5px;
        }

        .signature-name u {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="header">
        <table style="width: 100%;">
            <tr>
                <td style="width: 20%;">
                    <img src="<?= base_url('uploads/' . $kop_surat) ?>" alt="">
                </td>
                <td style="text-align: center;">
                    <h3>DOKUMENTASI PEKERJAAN</h3>
                </td>
                <td style="width: 20%;">
                    <img src="<?= base_url('uploads/' . $logo) ?>" alt="">
                </td>
            </tr>
        </table>
    </div>

    <!-- Information Table -->
    <table class="info-table">
        <tr>
            <td>Nama Pekerjaan</td>
            <td>: <?php echo ($nama_pekerjaan) ?></td>
        </tr>
        <tr>
            <td>Nomor SPK</td>
            <td>: <?php echo ($nomor) ?></td>
        </tr>
        <tr>
            <td>Tanggal SPK</td>
            <td>: <?php echo ($tanggal) ?></td>
        </tr>
    </table>

    <!-- Progress Table -->
    <table class="progress-table">
        <thead>
            <tr>
                <th class="col-no">No</th>
                <th class="col-lokasi">Lokasi</th>
                <th class="col-kegiatan">Uraian Kegiatan</th>
                <th class="col-progress">Progress 0%</th>
                <th class="col-progress">Progress 50%</th>
                <th class="col-progress">Progress 100%</th>
                <th class="col-keterangan">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $jumlah_baris = max(
                count($lokasi ?? []),
                count($kegiatan ?? []),
                count($file_00 ?? []),
                count($file_50 ?? []),
                count($file_100 ?? []),
                count($keterangan ?? [])
            );

            for ($i = 0; $i < $jumlah_baris; $i++): ?>
                <tr>
                    <!-- No -->
                    <td style="text-align:center; vertical-align:middle;"><?php echo $no++; ?></td>

                    <!-- Lokasi -->
                    <td style="text-align:center; vertical-align:middle;">
                        <?= isset($lokasi[$i]) ? htmlspecialchars($lokasi[$i]) : '' ?>
                    </td>

                    <!-- Uraian Kegiatan -->
                    <td style="text-align:center; vertical-align:middle;">
                        <?= isset($kegiatan[$i]) ? htmlspecialchars($kegiatan[$i]) : '' ?>
                    </td>

                    <!-- Progress 0% -->
                    <td>
                        <div class="photo-cell">
                            <?php if (!empty($file_00[$i])): ?>
                                <img src="<?= base_url('uploads/' . $file_00[$i]) ?>" alt="Foto 0%">
                            <?php endif; ?>
                        </div>
                    </td>

                    <!-- Progress 50% -->
                    <td>
                        <div class="photo-cell">
                            <?php if (!empty($file_50[$i])): ?>
                                <img src="<?= base_url('uploads/' . $file_50[$i]) ?>" alt="Foto 50%">
                            <?php endif; ?>
                        </div>
                    </td>

                    <!-- Progress 100% -->
                    <td>
                        <div class="photo-cell">
                            <?php if (!empty($file_100[$i])): ?>
                                <img src="<?= base_url('uploads/' . $file_100[$i]) ?>" alt="Foto 100%">
                            <?php endif; ?>
                        </div>
                    </td>

                    <!-- Keterangan -->
                    <td style="text-align:center; vertical-align:middle;">
                        <?= isset($keterangan[$i]) ? htmlspecialchars($keterangan[$i]) : '' ?>
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>


    </table>

    <!-- Improved Signature Section -->
    <div class="signature-wrapper">
        <!-- Tanda Tangan Kiri -->
        <div class="signature-box" style="float: left; text-align: left; margin-left: 10px;">
            <div class="signature-company"><?php echo $nama_perusahaan ?></div>
            <div class="signature-name">
                <u>Admin</u>
                <span>Manager</span>
            </div>
        </div>

        <!-- Tanda Tangan Kanan -->
        <div class="signature-box" style="float: right; text-align: right; margin-right: 10px;">
            <div class="signature-company"><?php echo $vendor ?></div>
            <div class="signature-name">
                <u>Delap</u>
                <span>Pengawas</span>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>