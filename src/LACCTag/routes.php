<?php
Route::group( [ 'prefix' => 'admin/tags', 'namespace' => 'LACCPress\LACCTag\Controllers' ], function () {
		Route::get( 'index', 'AdminTagsController@index' );
} );
