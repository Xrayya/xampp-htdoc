<?php //session_start(); ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title><?= $data['judul'] ?></title>
    <meta charset="UTF-8">
</head>

<body>
    <header style="margin: 0px; padding: 0px; display: flex; flex-direction: row-reverse; gap: 4px;">
        <?php if (isset($_SESSION['nim'])) : ?>
            <a href="index.php?url=Home/logout">Logout</a>
            <span><?= $_SESSION['nim'] ?> | <?= $_SESSION['jabatan'] ?></span>
        <?php else : ?>
            <a href="index.php?url=Home/login">Login</a>
        <?php endif; ?>
    </header>
