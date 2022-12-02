<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request; 
	class Post extends Controller
	{
		public function form(Request $request)
		{
			if ($request->has('text'))
		    {
			  var_dump($request*$request->input('text'));
		    }
		    return view('test.test');
		}
	}
?>
