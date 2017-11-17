<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function __construct()
	{
		// $this->middleware('auth');
	}

    public function index()
    {
    	return redirect()->route('article.index');
    }

    public function login()
    {
    	return view('auth/login');
    }

    public function register()
    {
    	return view('auth/register');
    }

    public function forgotPassword()
    {
    	return view('auth/passwords/email');
    }

    public function resetPassword()
    {
    	return view('auth/passwords/reset');
    }

}
