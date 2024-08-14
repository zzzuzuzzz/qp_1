<?php

function getMenu(): array
{
    require __DIR__ . '/data/menu.php';
    arraySort($menu);
    return $menu;
}
