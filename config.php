<?php

/*
|--------------------------------------------------------------------------
| Layout Module Configurations
|--------------------------------------------------------------------------
|
|
*/

$bg_sidebar = app()->environment(['local', 'stage']) ? 'bg-gradient-primary-'.app()->environment() : 'bg-gradient-primary';
$bg_login = app()->environment(['local', 'stage']) ? 'bg-gradient-primary-'.app()->environment() : 'bg-gradient-primary';

return [
    'logo_sidebar' => null,
    'logo_login' => null,
    'bg_sidebar' => $bg_sidebar,
    'bg_login'  => $bg_login,
];
