<?php

/**
 * home controller
 */
class Home2 extends Controller
{
	
	function index()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		
		$this->view('home2');
	}
}
