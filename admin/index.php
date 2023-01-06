<?php

include 'pages/koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        body {
           
            min-height: 100vh;
        }

        .img-cards {
            display: block;
            height: 200px;
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/rich/richtext.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css' integrity='sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==' crossorigin='anonymous' />
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php?p=home">BU ATIK - Admin</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=home">Home </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produk</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="index.php?p=input_produk">Tambah Produk</a>
                            <a class="dropdown-item" href="index.php?p=v_produk">Lihat Produk</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=v_kategori">Kategori</a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=penjualan">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=v_produk">Logout</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="index.php?p=tes">Tes</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <?php
        $pages_dir  =  'pages';
        if (!empty($_GET['p'])) {
            $pages  =  scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
            $p  =  $_GET['p'];
            if (in_array($p . '.php', $pages)) {
                include($pages_dir . '/' . $p . '.php');
            } else {
                echo "Halaman tidak ditemukan!";
            }
        } else {
            include($pages_dir . '/home.php');
        } ?>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js' integrity='sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==' crossorigin='anonymous'></script>

    <script src="assets/rich/jquery.richtext.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    if (!empty($_GET['status'])) {
    ?>
        <script>
            Swal.fire({

                icon: 'success',
                title: 'Produk Berhasil Di Tambahkan',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    <?php
    }

    ?>

    <script>
        $('.areas').richText({

            // text formatting
            bold: true,
            italic: true,
            underline: false,

            // text alignment
            leftAlign: false,
            centerAlign: false,
            rightAlign: false,
            justify: false,

            // lists
            ol: false,
            ul: false,

            // title
            heading: false,

            // fonts
            fonts: false,
            fontList: ["Arial",
                "Arial Black",
                "Comic Sans MS",
                "Courier New",
                "Geneva",
                "Georgia",
                "Helvetica",
                "Impact",
                "Lucida Console",
                "Tahoma",
                "Times New Roman",
                "Verdana"
            ],
            fontColor: false,
            fontSize: true,

            // uploads
            imageUpload: false,
            fileUpload: false,


            // link
            urls: false,

            // tables
            table: false,

            // code
            removeStyles: true,
            code: false,

            // colors
            colors: [],

            // dropdowns
            fileHTML: '',
            imageHTML: '',

            // translations
            translations: {
                'title': 'Title',
                'white': 'White',
                'black': 'Black',
                'brown': 'Brown',
                'beige': 'Beige',
                'darkBlue': 'Dark Blue',
                'blue': 'Blue',
                'lightBlue': 'Light Blue',
                'darkRed': 'Dark Red',
                'red': 'Red',
                'darkGreen': 'Dark Green',
                'green': 'Green',
                'purple': 'Purple',
                'darkTurquois': 'Dark Turquois',
                'turquois': 'Turquois',
                'darkOrange': 'Dark Orange',
                'orange': 'Orange',
                'yellow': 'Yellow',
                'imageURL': 'Image URL',
                'fileURL': 'File URL',
                'linkText': 'Link text',
                'url': 'URL',
                'size': 'Size',
                'responsive': '<a href="https://www.jqueryscript.net/tags.php?/Responsive/">Responsive</a>',
                'text': 'Text',
                'openIn': 'Open in',
                'sameTab': 'Same tab',
                'newTab': 'New tab',
                'align': 'Align',
                'left': 'Left',
                'justify': 'Justify',
                'center': 'Center',
                'right': 'Right',
                'rows': 'Rows',
                'columns': 'Columns',
                'add': 'Add',
                'pleaseEnterURL': 'Please enter an URL',
                'videoURLnotSupported': 'Video URL not supported',
                'pleaseSelectImage': 'Please select an image',
                'pleaseSelectFile': 'Please select a file',
                'bold': 'Bold',
                'italic': 'Italic',
                'underline': 'Underline',
                'alignLeft': 'Align left',
                'alignCenter': 'Align centered',
                'alignRight': 'Align right',
                'addOrderedList': 'Add ordered list',
                'addUnorderedList': 'Add unordered list',
                'addHeading': 'Add Heading/title',
                'addFont': 'Add font',
                'addFontColor': 'Add font color',
                'addFontSize': 'Add font size',
                'addImage': 'Add image',
                'addVideo': 'Add video',
                'addFile': 'Add file',
                'addURL': 'Add URL',
                'addTable': 'Add table',
                'removeStyles': 'Remove styles',
                'code': 'Show HTML code',
                'undo': 'Undo',
                'redo': 'Redo',
                'close': 'Close'
            },

            // privacy
            youtubeCookies: false,

            // preview
            preview: false,

            // placeholder
            placeholder: '',

            // dev settings
            useSingleQuotes: false,
            height: 0,
            heightPercentage: 0,
            id: "",
            class: "",
            useParagraph: false,
            maxlength: 0,
            useTabForNext: false,

            // callback function after init
            callback: undefined,

        });
    </script>
</body>

</html>