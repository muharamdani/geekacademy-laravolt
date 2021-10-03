<?php

use Modules\Comment\Controllers\CommentController;

Route::group(
    [
        'prefix' => config('modules.comment.route.prefix'),
        'as' => 'modules::',
        'middleware' => config('modules.comment.route.middleware'),
    ],
    function () {
        Route::resource('comment', CommentController::class);
    }
);
