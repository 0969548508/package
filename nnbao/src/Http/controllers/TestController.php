<?php 

namespace nnbao\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller{

	public function index(){
		return view("package::test");
	}

	public function TestLang(){
		return view("package::test");
	}
}