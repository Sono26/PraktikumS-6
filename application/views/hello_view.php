<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hello Arya - 2110020004</title>
</head>

<body>
    <h1>Selamat Datang di Web Arya <?= $nama; ?> - <?= $npm; ?></h1>
    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>

</body>

</html>