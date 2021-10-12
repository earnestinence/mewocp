<?php require APP_ROOT . '/views/inc/header.php';?>
    <h1>Homepage from views is loaded</h1>
    <h4><?php echo URL_ROOT; ?></h4>
    <h4><?php echo APP_ROOT; ?></h4>
<?php
echo $_SERVER['DOCUMENT_ROOT'];
?>
<?php require APP_ROOT . '/views/inc/footer.php';?>