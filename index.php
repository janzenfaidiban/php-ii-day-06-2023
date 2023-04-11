<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    
    <!-- HEADER START -->
    <?php include('include/header.php'); ?>
    <!-- HEADER END -->

    <!-- NAV START -->
    <?php include('include/nav.php'); ?>
    <!-- NAV END -->

    <!-- MAIN CONTENT START -->
    <?php 
        if(isset($_GET['page']) && $_GET['page'] == 'beranda'){
            include('pages/beranda.php');
        } else {
            include('pages/kategori.php');
        }
    ?>
    <!-- MAIN CONTENT END -->

    <!-- FOOTER START -->
    <?php include('include/footer.php'); ?>
    <!-- FOOTER END -->

</body>

</html>