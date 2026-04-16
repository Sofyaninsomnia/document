<footer id="footer" class="footer">


        <div class="container text-center mt-4">
            <p>©<span>Copyright</span> <strong class="px-1 sitename"><a href="https://github.com/Sofyaninsomnia">SofyanInsomnia</a></strong> <span><?= date('Y') ?>. All Rights
                    Reserved</span></p>
            <div class="credits"><span>Need Help? <a href="https://github.com/Sofyaninsomnia/document">Read Me</a></span></div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.submit();
                        }
                    });
                });
            });
        });
    </script>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url();?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url();?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url();?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url();?>assets/js/dynamic-form.js"></script>

    <!-- Main JS File -->
    <script src="<?= base_url();?>assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.all.min.js"></script>
    <script>
        document.querySelectorAll('.container-ngasal').forEach(function(container) {
            const input = container.querySelector('.file-input');
            const header = container.querySelector('.header-ngasal');
            const fileNameText = container.querySelector('.footer-ngasal .file-name');

            function handleFileChange(e) {
                const file = e.target.files[0];
                if (!file) return;

                fileNameText.textContent = file.name;

                if (file.type.startsWith("image/")) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        header.innerHTML = '';
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'preview-image';
                        header.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            }

            input.addEventListener('change', handleFileChange);

            container.querySelector('.clear-file-btn').addEventListener('click', function(e) {
                e.preventDefault();

                header.innerHTML = `
            <div class="upload-icon">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 10V9C7 6.23858 9.23858 4 12 4C14.7614 4 17 6.23858 17 9V10C19.2091 10 21 11.7909 21 14C21 15.4806 20.1956 16.8084 19 17.5M7 10C4.79086 10 3 11.7909 3 14C3 15.4806 3.8044 16.8084 5 17.5M12 12V21M12 12L15 15M12 12L9 15"
                        stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <p>Browse File to upload!</p>
            </div>
        `;

                fileNameText.textContent = "Not selected file";

                input.value = "";
            });
        });
    </script>






</body>

</html>
