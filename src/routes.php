<?php

Route::get('hello', 'bradovanovic\hello\src\Http\Controllers\frontend\HelloController@index');

Route::get('admin/hello', 'bradovanovic\hello\HelloController@adminIndex');
