<?php

declare(strict_types=1);

$cfg['blowfish_secret'] = getenv('PMA_BLOWFISH_SECRET') ?: 'laravel-inertia-concepts-local-pma';
$cfg['TempDir'] = '/tmp/phpmyadmin';

$i = 0;
$i++;

$cfg['Servers'][$i]['auth_type'] = 'config';
$cfg['Servers'][$i]['host'] = getenv('PMA_HOST') ?: 'mysql';
$cfg['Servers'][$i]['port'] = getenv('PMA_PORT') ?: '3306';
$cfg['Servers'][$i]['user'] = getenv('PMA_USER') ?: '';
$cfg['Servers'][$i]['password'] = getenv('PMA_PASSWORD') ?: '';
$cfg['Servers'][$i]['AllowNoPassword'] = false;
