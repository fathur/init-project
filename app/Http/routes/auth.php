<?php

get('login', []);
get('register', []);
get('register/confirm/{code}', []);
get('login/forgot', []);
get('login/reset/{code}', []);

Route::group([
    //'namespace' => '',
    // 'prefix'    => 'auth'
], function() {
    get('routes', []);
    put('routes', []);

    get('users/permissions', []);
    put('users/permissions', []);

    get('routes/permissions', []);
    put('routes/permissions', []);

    resource('users', 'UserController', []);
    resource('roles', 'RoleController', []);
    resource('permissions', 'RoleController', []);
});