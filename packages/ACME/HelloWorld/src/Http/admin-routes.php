<?php

Route::group(['middleware' => ['web', 'admin']], function () {

    Route::get('/admin/helloworld', 'ACME\HelloWorld\Http\Controllers\Admin\HelloWorldController@index')->defaults('_config', [
        'view' => 'helloworld::admin.index',
    ])->name('helloworld.admin.index');

});