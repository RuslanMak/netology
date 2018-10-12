<?php
    $userName = 'Руслан';
    $userAge = '25';
    $userEmail = 'makarovemd@gmail.com';
    $userCity = 'Белая Церковь';
    $userAbout = 'Учусь на професии веб-разработчик';
?>

<style>
    dl {
        display: table-row;
    }

    dt, dd {
        display: table-cell;
        padding: 5px 10px;
    }
</style>
<h1>Страница пользователя <?= $userName ?></h1>

<dl>
    <dt>Имя</dt>
    <dd><?= $userName ?></dd>
</dl>

<dl>
    <dt>Возраст</dt>
    <dd><?= $userAge ?></dd>
</dl>

<dl>
    <dt>Адрес электронной почты</dt>
    <dd><a href="<?= $userEmail ?>"><?= $userEmail ?></a></dd>
</dl>

<dl>
    <dt>Город</dt>
    <dd><?= $userCity ?></dd>
</dl>

<dl>
    <dt>О себе</dt>
    <dd><?= $userAbout ?></dd>
</dl>
