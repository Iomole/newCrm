<?php

/**
 * crms controller
 */
class Crms extends Controller
{
	
	public function index()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$crm = new Crm();
 
		$data = $crm->findAll();

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Crms','crms'];

		if(Auth::access('super_admin')){
			$this->view('crms',[
				'crumbs'=>$crumbs,
				'rows'=>$data
			]);
		}else{
			$this->view('access-denied');
		}
	}

	public function add()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$errors = array();
		if(count($_POST) > 0 && Auth::access('super_admin'))
 		{

			$crm = new Crm();
			if($crm->validate($_POST))
 			{
 				
 				$_POST['date'] = date("Y-m-d H:i:s");

 				$crm->insert($_POST);
 				$this->redirect('crms');
 			}else
 			{
 				//errors
 				$errors = $crm->errors;
 			}
 		}

 		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Crms','crms'];
		$crumbs[] = ['Add','crms/add'];

		if(Auth::access('super_admin')){
			$this->view('crms.add',[
				'errors'=>$errors,
				'crumbs'=>$crumbs,
				
			]);
		}else{
			$this->view('access-denied');
		}
	}

	public function edit($id = null)
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$crm = new Crm();

		$errors = array();
		if(count($_POST) > 0 && Auth::access('super_admin'))
 		{

			if($crm->validate($_POST))
 			{
 				
 				$crm->update($id,$_POST);
 				$this->redirect('crms');
 			}else
 			{
 				//errors
 				$errors = $crm->errors;
 			}
 		}

 		$row = $crm->where('id',$id);

 		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Crms','crms'];
		$crumbs[] = ['Edit','crms/edit'];

		if(Auth::access('super_admin')){

			$this->view('crms.edit',[
				'row'=>$row,
				'errors'=>$errors,
				'crumbs'=>$crumbs,
			]);
		}else{
			$this->view('access-denied');
		}
	}

	public function delete($id = null)
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$crm = new Crm();

		$errors = array();

		if(count($_POST) > 0 && Auth::access('super_admin'))
 		{
 
 			$crm->delete($id);
 			$this->redirect('crms');
 		 
 		}

 		$row = $crm->where('id',$id);

 		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Crms','crms'];
		$crumbs[] = ['Delete','crms/delete'];

		if(Auth::access('super_admin')){
			$this->view('crms.delete',[
				'row'=>$row,
	 			'crumbs'=>$crumbs,
			]);
		}else{
			$this->view('access-denied');
		}
	}
	
}
