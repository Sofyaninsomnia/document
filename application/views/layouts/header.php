<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Documen Generator - Jasa Marga</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url();?>assets/img/JM.png" rel="icon">
    <link href="<?= base_url();?>assets/img/JM.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.min.css">

    <!-- Main CSS File -->
    <link href="<?= base_url();?>assets/css/main.css" rel="stylesheet">
    <style>
        /* From Uiverse.io by Yaya12085 */
        .container-ngasal {
            height: 300px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 4px 4px 30px rgba(0, 0, 0, .2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
            gap: 5px;
            background-color: rgba(0, 110, 255, 0.041);
        }

        .header-ngasal {
            position: relative;
            flex: 1;
            width: 100%;
            border: 2px dashed royalblue;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
            height: 200px;
            padding: 0;
        }

        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 10px;
        }

        .upload-icon {
            text-align: center;
        }

        .header-ngasal svg {
            height: 100px;
        }

        .header-ngasal p {
            text-align: center;
            color: black;
        }

        .footer-ngasal {
            background-color: rgba(0, 110, 255, 0.075);
            width: 100%;
            height: 40px;
            padding: 8px;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            color: black;
            border: none;
        }

        .footer-ngasal svg {
            height: 130%;
            fill: royalblue;
            background-color: rgba(70, 66, 66, 0.103);
            border-radius: 50%;
            padding: 2px;
            cursor: pointer;
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.205);
        }

        .footer-ngasal p {
            flex: 1;
            text-align: center;
        }

        .file-input {
            display: none;
        }

        /* From Uiverse.io by vinodjangid07 */
        .print-btn {
            width: 100px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: 1px solid rgb(213, 213, 213);
            border-radius: 10px;
            gap: 10px;
            font-size: 16px;
            cursor: pointer;
            overflow: hidden;
            font-weight: 500;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.065);
            transition: all 0.3s;

            /* Tambahan untuk beri jarak */
            margin-top: 20px;
            /* Atur jarak ke atas */
            margin-bottom: 10px;
            /* (Opsional) jarak ke bawah */
        }


        .printer-wrapper {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 100%;
        }

        .printer-container {
            height: 50%;
            width: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .printer-container svg {
            width: 100%;
            height: auto;
            transform: translateY(4px);
        }

        .printer-page-wrapper {
            width: 100%;
            height: 50%;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .printer-page {
            width: 70%;
            height: 10px;
            border: 1px solid black;
            background-color: white;
            transform: translateY(0px);
            transition: all 0.3s;
            transform-origin: top;
        }

        .print-btn:hover .printer-page {
            height: 16px;
            background-color: rgb(239, 239, 239);
        }

        .print-btn:hover {
            background-color: rgb(239, 239, 239);
        }

        .text-left {
            text-align: left;
        }
    </style>


</head>