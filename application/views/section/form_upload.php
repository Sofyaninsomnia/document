<section id="recent-posts" class="recent-posts section">
    <div class="container">
        <form action="<?= base_url('dashboard/create'); ?>" method="POST" enctype="multipart/form-data">

            <div class="row gy-5 justify-content-center align-items-center">

                <!-- Upload File KOP SURAT -->
                <div class="col-xl-4 col-md-6 d-flex justify-content-center">
                    <div class="container-ngasal">
                        <div class="header-ngasal">
                            <img class="preview-image" src="" alt="Preview"
                                style="display:none; max-width:100%; max-height:120px; object-fit: cover; position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px;">
                            <div class="upload-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M12 12V21M12 12L15 15M12 12L9 15"
                                        stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p>Browse File to upload!</p>
                            </div>
                        </div>

                        <label class="footer-ngasal" style="position: relative;">
                            <!-- Ikon kiri -->
                            <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path>
                                <path d="M18.153 6h-.009v5.342H23.5v-.002z"></path>
                            </svg>

                            <!-- Nama file -->
                            <p class="file-name">Logo Surat</p>

                            <!-- Ikon kanan (hapus) -->
                            <svg class="clear-file-btn" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z"
                                    stroke="#000000" stroke-width="2" />
                                <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z"
                                    stroke="#000000" stroke-width="2" />
                            </svg>

                            <!-- Input file -->
                            <input type="file" name="kop_surat" class="file-input" accept="image/*"
                                style="opacity: 0; position: absolute; inset: 0; cursor: pointer;">
                        </label>
                    </div>
                </div>

                <!-- Upload File LOGO -->
                <div class="col-xl-4 col-md-6 d-flex justify-content-center">
                    <div class="container-ngasal">
                        <div class="header-ngasal">
                            <img class="preview-image" src="" alt="Preview"
                                style="display:none; max-width:100%; max-height:120px; object-fit: cover; position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 10px;">
                            <div class="upload-icon">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M12 12V21M12 12L15 15M12 12L9 15"
                                        stroke="#000000" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p>Browse File to upload!</p>
                            </div>
                        </div>

                        <label class="footer-ngasal" style="position: relative;">

                            <svg fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.331 6H8.5v20h15V14.154h-8.169z"></path>
                                <path d="M18.153 6h-.009v5.342H23.5v-.002z"></path>
                            </svg>

                            <!-- Nama file -->
                            <p class="file-name">Kop Surat</p>

                            <!-- Ikon kanan (hapus) -->
                            <svg class="clear-file-btn" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.16565 10.1534C5.07629 8.99181 5.99473 8 7.15975 8H16.8402C18.0053 8 18.9237 8.9918 18.8344 10.1534L18.142 19.1534C18.0619 20.1954 17.193 21 16.1479 21H7.85206C6.80699 21 5.93811 20.1954 5.85795 19.1534L5.16565 10.1534Z"
                                    stroke="#000000" stroke-width="2" />
                                <path d="M19.5 5H4.5" stroke="#000000" stroke-width="2"
                                    stroke-linecap="round" />
                                <path d="M10 3C10 2.44772 10.4477 2 11 2H13C13.5523 2 14 2.44772 14 3V5H10V3Z"
                                    stroke="#000000" stroke-width="2" />
                            </svg>

                            <!-- Input file -->
                            <input type="file" name="logo" class="file-input" accept="image/*"
                                style="opacity: 0; position: absolute; inset: 0; cursor: pointer;">
                        </label>
                    </div>
                </div>

                <!-- Bagian Input Dinamis -->
                <div class="col-12">
                    <div class="p-4 m-5 border rounded shadow-sm bg-light">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <button type="button" id="addRow" class="button btn btn-outline-primary ms-auto">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label class="form-label">Nama Pekerjaan</label>
                                <input type="text" class="form-control" name="nama_pekerjaan" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Nomor SPK</label>
                                <input type="text" class="form-control" name="nomor" required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tanggal SPK</label>
                                <input type="date" class="form-control" name="tanggal" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Unit</label>
                                <input type="text" class="form-control" name="nama_perusahaan" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Vendor</label>
                                <input type="text" class="form-control" name="vendor" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Manager</label>
                                <input type="text" class="form-control" name="manager" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Pengawas</label>
                                <input type="text" class="form-control" name="pengawas" required>
                            </div>
                        </div>
                        <div id="inputContainer">
                            <div class="row g-3 align-items-center mb-4 input-row-group">
                                <div class="col-md-4">
                                    <label class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi[]" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Uraian Kegiatan</label>
                                    <input type="text" class="form-control" name="kegiatan[]" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan[]" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">0%</label>
                                    <input type="file" class="form-control" name="file_00[]" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">50%</label>
                                    <input type="file" class="form-control" name="file_50[]" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">100%</label>
                                    <input type="file" class="form-control" name="file_100[]" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex align-items-center justify-content-center gap-2">
                <button type="submit" class="btn btn-primary bi bi-stars"> Generate </button>
            </div>

        </form>
    </div>
</section>