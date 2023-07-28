<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('src/view/head.php'); ?>
</head>
<body id="page-top">
    <!-- Navigation-->
    <?php require('nav.php') ?>
 <?php if(isset($messageSuccess)){ ?>
            <div class="alert alert-success" id="message"><?= $messageSuccess ?></div>
 <?php } 
 ?>
    <?php require('accueil.php') ?>
    <?php require('footer.php') ?>
    <!-- Masthead-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>

