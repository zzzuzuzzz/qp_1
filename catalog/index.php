<?php
require __DIR__ . '/../src/core.php';
$cars = getCars();
includeTemplate('layouts/header.php', ['title' => 'Каталог']);
includeTemplate('layouts/carsCatalog.php', ['cars' => $cars]);
includeTemplate('layouts/footer.php');
