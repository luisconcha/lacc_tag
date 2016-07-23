<?php
Route::group( [ 'prefix' => 'admin/tags', 'as' => 'admin.tags.', 'namespace' => 'LACCPress\LACCTag\Controllers', 'middleware' => [ 'web' ] ], function () {
		Route::get( '/', [ 'uses' => 'AdminTagsController@index', 'as' => 'index' ] );
} );
