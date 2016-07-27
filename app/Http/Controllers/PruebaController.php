<?php namespace blogYeye\Http\Controllers;

class PruebaController extends Controller {
	
	public function index()
	{
		return("Hola desde Controller");
	}

	public function nombre($nombre)
	{
		return("Mi nombre es:".$nombre);
	}
}