<?php

use ProcessMaker\Package\Files\Http\Controllers\FilesController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/files/fetch', [FilesController::class, 'fetch'])->name('package.files.fetch');
    Route::apiResource('admin/files', FilesController::class);
});
