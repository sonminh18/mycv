<?php

Route::group(['middlewareGroups' => 'web', 'prefix' => 'core', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{
    Route::get('/', 'CoreController@index');
    Route::post('/setlang', 'CoreController@setlanguage');
});
