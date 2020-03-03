<?php 

$namespace = "nnbao\Http\Controllers";

Route::group(
	[
		'namespace' => $namespace,
		'prefix' => 'package'
	],function(){
		Route::get('test',function(){
			echo "this is route in package";
		});
		Route::get('testcontroller','TestController@index');

		Route::get('testlang', 'TestController@TestLang');
	}
);