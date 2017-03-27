<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\User;

class UsersController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request, [
		    'name' => 'required',
		    'email' => 'required|unique:users',
		    'country' => 'required',
		    'nationality' => 'required',
		    'mobile' => 'required'
		]);
    	$task = User::create($request->all());
    	return Response::json($task);
    }
}
