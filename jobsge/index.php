<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Geojobs.ge</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

<div class="container mt-3">
    <?php
     include_once "./blocks/header.php";
     include_once "./blocks/search_block.php"
    ?>

    <div class="row">
        <div class="col-md-12">
            <!---TABLE ---->
            <?php include_once "./blocks/default_table.php" ?>
        </div>
    </div>
</div>

<!-- Login Modal -->
<?php include_once './blocks/modal.php' ?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./scripts/index.js"></script>
</html>
