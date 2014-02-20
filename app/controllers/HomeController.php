<?php

class HomeController extends BaseController {

 protected $layout = 'layouts.master';
 
	public function homePage()
	{

		return View::make("homepage");
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}