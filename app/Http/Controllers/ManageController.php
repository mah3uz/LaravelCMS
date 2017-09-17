<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{
    //Manage dashboard
	public function index() {
		return view('manage.dashboard');
	}

	public function dashboard() {
		return view('manage.dashboard');
	}

//	public function profile() {
//		return view('manage.profile');
//	}
}
