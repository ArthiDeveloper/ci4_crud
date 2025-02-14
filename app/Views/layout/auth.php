<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title><?= isset($title) ? $title : 'HorecaNation'; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="login" name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- Theme Config Js -->
        <script src="assets/js/hyper-config.js"></script>

        <!-- App css -->
        <link href="assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- Style css -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body class="authentication-bg pb-0">
        
        <?= $this->renderSection('content') ?>
        
        <!-- end page -->
        
        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

    </body>
</html>
