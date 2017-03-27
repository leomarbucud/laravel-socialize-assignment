<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class ImageController extends Controller
{
	public function upload()
	{
		return view('upload');
   	}

	public function store(Request $request)
	{
		$image = new Image();
        
		if($request->hasFile('image')) {
            $file = Input::file('image');
			$name = time(). '-' .$file->getClientOriginalName();
            $image->path = $name;
            $file->move(public_path().'/images/uploads/', $name);
        }

        $task = $image->save();
        return Response::json($task);
   	}

	public function show()
	{
		$images = Image::all();
        return view('images', compact('images'));
    }
}