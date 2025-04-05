<?php

use ProcessMaker\Package\Files\Http\Controllers\FilesController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/files', [FilesController::class, 'index'])->name('package.files.index');
    Route::get('files', [FilesController::class, 'index'])->name('package.files.tab.index');
});
