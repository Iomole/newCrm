<?php

/**
 * crms controller
 */
class Accounts extends Controller
{
	
	public function index()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$account = new Account();
		$data = $account->findAll();
		$user =new User();
		$datad =$user->findAll();


		$crumbs[] = ['Dashboard','home'];
		$crumbs[] = ['Accounts','accounts'];

		if(Auth::access('super_admin')||Auth::access('admin')||Auth::access('lecturer')){
			$this->view('accounts',[
				'crumbs'=>$crumbs,
				'rows'=>$data,
				'rows2'=>$datad,

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
		if(count($_POST) > 0 && (Auth::access('super_admin')||Auth::access('admin')||Auth::access('sales')))
 		{

			$account = new Account();
			if($account->validate($_POST))
 			{
 				
 				$_POST['date'] = date("Y-m-d H:i:s");

 				$account->insert($_POST);
 				$this->redirect('account');
 			}else
 			{
 				//errors
 				$errors = $account->errors;
 			}
 		}
 			$user =new User();
		$datad =$user->findAll();

 		$crumbs[] = ['Dashboard','home'];
		$crumbs[] = ['Accounts','accounts'];
		$crumbs[] = ['Add','accounts/add'];

		if(Auth::access('super_admin')||Auth::access('admin')||Auth::access('lecturer')){
			$this->view('accounts.add',[
				'errors'=>$errors,
				'crumbs'=>$crumbs,
				'rows2'=>$datad,
			
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

		$account = new Account();

		$errors = array();
		if(count($_POST) > 0 && Auth::access('super_admin'))
 		{

			if($account->validate($_POST))
 			{
 				
 				$account->update($id,$_POST);
 				$this->redirect('accounts');
 			}else
 			{
 				//errors
 				$errors = $account->errors;
 			}
 		}

 		$user =new User();
		$datad =$user->findAll();
 		$row = $account->where('id',$id);

 		$crumbs[] = ['Dashboard','home'];
		$crumbs[] = ['Accounts','accounts'];
		$crumbs[] = ['Edit','accounts/edit'];

		if(Auth::access('super_admin')){

			$this->view('accounts.edit',[
				'row'=>$row,
				'errors'=>$errors,
				'crumbs'=>$crumbs,
				'rows2'=>$datad,
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

		$account = new Account();

		$errors = array();

		if(count($_POST) > 0 && Auth::access('super_admin'))
 		{
 
 			$account->delete($id);
 			$this->redirect('accounts');
 		 
 		}

 		$row = $account->where('id',$id);

 		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Accounts','accounts'];
		$crumbs[] = ['Delete','accounts/delete'];

		if(Auth::access('super_admin')){
			$this->view('accounts.delete',[
				'row'=>$row,
	 			'crumbs'=>$crumbs,
			]);
		}else{
			$this->view('access-denied');
		}
	}
	
}
