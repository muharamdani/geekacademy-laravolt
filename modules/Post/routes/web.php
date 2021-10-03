<?php

use Modules\Post\Controllers\PostController;

Route::group(
    [
        'prefix' => config('modules.post.route.prefix'),
        'as' => 'modules::',
        'middleware' => config('modules.post.route.middleware'),
    ],
    function () {
        Route::resource('post', PostController::class);
    }
);
