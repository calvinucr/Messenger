<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use App\User;

class ProfileController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$user = Auth::user();
		return view('user.profile', ['user' => $user]);
	}

	public function update(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'city' => 'max:255',
			'company' => 'max:255',
			'phone' => 'max:255',
		]);
		$user = Auth::user();
		$user->fill($request->only('name', 'email', 'city', 'company', 'phone'))->save();
		return Redirect()->back();
	}
}
