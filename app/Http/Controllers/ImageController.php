<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Image as Img;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Image;

class ImageController extends Controller
{
	public function upload()
	{
		return view('upload');
   	}

	public function store(Request $request)
	{
		$image = new Img;

		$this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
		if($request->hasFile('image')) {
			$file = $request->file('image');
	        $name = time(). '-' .$file->getClientOriginalName();
	        $destinationPath = public_path('/images/uploads');

	        $img = Image::make($file->getRealPath());
			$img->greyscale()
				->insert(public_path('/images/watermark.png'))
				->save($destinationPath.'/'.$name);

	        $destinationPath = public_path('/images/uploads/original');
	        $file->move($destinationPath, $name);
  
            $image->path = $name;
        }

        $task = $image->save();
        return Response::json($task);
   	}

	public function show()
	{
		$images = Img::all();
        return view('images', compact('images'));
    }

    public function addEffect($image)
    {
    	$img = Image::make($image);
    	$img->greyscale();
    	$img->insert(public_path('/images/watermark.png'));
    	return $img->save();
    }
}