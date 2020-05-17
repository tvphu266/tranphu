<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\User;
class ClassController extends Controller
{
	public function get()
	{
		$class = DB::table('class')->get();

		return view('class', ['class' => $class]);
	}

	public function store(Request $request)
	{

        // Create Class
    	$name_class = $request->name_class;
    	DB::table('class')->insert(
    		['name_class' => $name_class]
    	);
    	return redirect('class');

	}
}
