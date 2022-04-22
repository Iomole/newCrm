<?php

/**
 * change crm controller
 */
class Switch_crm extends Controller
{
	
	function index($id = '')
	{
		// code...
		if(Auth::access('super_admin')){
			Auth::switch_crm($id);
		}
 		
 		$this->redirect('crms');
 
	}
}
