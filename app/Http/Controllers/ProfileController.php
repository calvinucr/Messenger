<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\updateProfileInfo;
use App\Http\Requests\updateProfileDescription;
use App\Http\Requests\updateProfileProfolio;
use Illuminate\Contracts\Validation\Validator;
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
		$phone = array(
			'phone1' => substr($user->phone,0,1),
			'phone2' => substr($user->phone,1,3),
			'phone3' => substr($user->phone,3,3),
			'phone4' => substr($user->phone,6,4)
		);
		return view('user.profile', ['user' => $user])->with($phone);
	}

	/**
	* Updating user public informations
	*
	* @param  updateProfileInfo  $request
	* @return Response
	*/
	public function updateInfo(updateProfileInfo $request)
	{

		$user = Auth::user();

		//	Save user name
		$user->name = $request->input('name', $user->name);
		$user->save();

		//	Save user email
		if ($request->input('email') != $user->email)	{
			$user->email = $request->input('email');
			$user->save();
		}

		//	Save user company
		$user->company = $request->input('company');
		$user->save();

		//	Save user city
		$user->city = $request->input('city');
		$user->save();

		//	Save user phone
		$user->phone = $request->input('phone');
		$user->save();

		return Redirect()->back();
	}

	/**
	* Updating user public informations
	*
	* @param  updateProfileDescription $request
	* @return Response
	*/
	public function updateDescription(Request $request)
	{

		$user = Auth::user();

		//	Save user description
		$user->description = $request->input('description');
		$user->save();

		return Redirect()->back();
	}

	/**
	* Updating user public informations
	*
	* @param  updateProfileProfolio  $request
	* @return Response
	*/
	public function updateProfolio(Request $request)
	{
		$user = Auth::user();

		//	Save user profolio
		$user->dprofolio = $request->input('profolio');
		$user->save();

		return Redirect()->back();
	}
}
