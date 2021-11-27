<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('system.', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('System ', route('system.'));
});

/****************************************** System Logs ******************************************/
Breadcrumbs::for('system.logs', function (BreadcrumbTrail $trail) {
    $trail->parent('system.');
    $trail->push('Logs', route('system.logs'));
});
