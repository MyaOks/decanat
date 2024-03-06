<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Decanat site</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<?php
if (app()->auth::check()):
?>

<div style="background-color: #3fb0e0;
text-align: center; font-size: 50px; padding: 2vh 0 2vh 0;
display: flex; justify-content: space-around; align-items: center">
    <a style="color: black" href="<?= app()->route->getUrl('/main_page') ?>"><h3>User:<?= app()->auth->user()->name ?? ''; ?></h3></a>
    <h1>Университет</h1>
    <a style="color: black" href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
</div>

<?php endif;?>

<?= $content ?? ''; ?>

</body>
</html>
