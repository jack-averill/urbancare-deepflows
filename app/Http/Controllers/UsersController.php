<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
	public function new() {
		
		return view('users.new');

	}

	public function store() {
		return "Storing the data";
	}
}
