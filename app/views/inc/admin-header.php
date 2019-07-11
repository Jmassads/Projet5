<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Julia Assad</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link type="text/css" rel="stylesheet" href="css/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->

    <!-- Linear Icons -->
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <link type="text/css" rel="stylesheet" href="<?php echo URLROOT; ?>/admincss/style.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>



    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=prdte4ybij6mu30q8a7qo4pf5aj26up92ct59lgswpopxodr">
    </script>

    <script>
    tinymce.init({
        selector: '.mytextarea',
        height: 400,
        plugins: 'code image emoticons link media lists',
        paste_data_images: true,
        toolbar: 'insertfile | formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | undo redo | code image',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ],
        // convert_urls: false,
        image_prepend_url: "http://localhost:8888/FinalProjectphp/",
        // without images_upload_url set, Upload tab won't show up
        images_upload_url: '/FinalProjectphp//Upload/',
        image_dimensions: true,
        relative_urls: false,
        // remove_script_host: false,
        // convert_urls: true,
        // forced_root_block: 'div',
        extended_valid_elements: "*[*]",

        // override default upload handler to simulate successful upload
        images_upload_handler: function(blobInfo, success, failure) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;


            xhr.open('POST', '/FinalProjectphp//Upload/');
            // xhr.open('POST', 'index.php?url=Upload');
            xhr.onload = function() {
                var json;

                if (xhr.status != 200) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);
                console.log(json);
                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                success(json.location);

            };

            formData = new FormData();
            console.log(formData);
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
         
        },
    });
    </script>
</head>

<body>

    <?php require APPROOT . '/views/inc/admin-navbar.php';?>
    <div class="container">

