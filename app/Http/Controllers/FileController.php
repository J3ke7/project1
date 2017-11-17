<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class FileController extends Controller
{
    public function index()
    {
    	$imgs = Image::all();
    	return view('/images/index')->with('imgs', $imgs);
    }

    public function upload()
    {
    	return view('/images/upload');
    }

    public function handleUpload(Request $request)
    {
    	if($request->hasFile('anh'))
    	{
	    	$file = $request->file('anh');
	    	$name = $file->getClientOriginalName();
	    	$url  = $file->getRealPath();
	    	$img = Image::create([
    			'name' => $name,
    			'url'  => $url,
    		]);
    		$request->file('anh')->move('images', $name);
    		return redirect()->route('image.index');
    	}
	}
}
