<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
	
	/**
     * Flatten an array of arbitrarily nested arrays of integers into a flat array of integers
     *
     * @param  array  $arr e.g [[1,2,[3]],4] 
     * @return flat array of integers e.g [1,2,3,4]
     */
	function flattenArray($arr, &$holder = array()) {		
		foreach ($arr as $value) {
			if(is_array($value)) {
				flattenArray($value, $holder);
			} else {
				array_push($holder, $value);
			}
		}
		return $holder;
	}
	$arbitrarilyNestedArray = array(
		array(
			1, 
			2, 
			array(3)
		),
		4
	);
	return flattenArray($arbitrarilyNestedArray);
});