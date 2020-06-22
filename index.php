<!DOCTYPE html>
<html lang="fr-FR">
<?php $page = 'index'; ?>
<head>
    <title>Accueil</title>
    <?php include("head.php"); ?>
</head>
<body class="background-noir">
<?php include("header.php"); ?>
<link rel="stylesheet" type="text/css" href="assets/css/index.css">

<main>
    <div class="container">
        <h3 class="text-center">Cosmogonie</h3>
        <h3 class="text-center delai3ms">Cosmogonie</h3>
        <h3 class="text-center delai6ms">Cosmogonie</h3>
        <h3 class="text-center delai9ms">Cosmogonie</h3>
        <h3 class="text-center delai12ms">Cosmogonie</h3>
        <h3 class="text-center delai15ms">Cosmogonie</h3>
        <h3 class="text-center delai18ms">Cosmogonie</h3>
        <h3 class="text-center delai21ms">Cosmogonie</h3>
    </div>
</main>

<!--IMPORTS JS-->
<?php include("script.php"); ?>
<!--/IMPORTS JS-->
<script src='node_modules/p5/lib/p5.min.js'></script>
<script src="assets/js/lineDistortion.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>