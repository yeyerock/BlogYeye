<?php namespace Cinema\Http\Controllers;

class WelcomeController extends Controller{

----/*
----|----------------------------------------------------------------------------------
----| Welcome Controller
----|----------------------------------------------------------------------------------
----|
----| This controller renders the "marketing page" for the application and 
----| is configured to only allow guests. Like most of the other sample
----| controllers, you are free to modify or remove it as you desire.
----|
---*/

----/**
-----* Create a new controller instance.
-----*
-----* @return void
----*/
-----public function_construct()
-----{
--------$this->middleware('guest');
-----}	

	/**
	 * Show the application welcome screen to he user.
	 *
	 *@return Response
	 */
	public funcion index()
	{
		return view('welcome');
	}
}