<?php

/**
 * students controller
 */
class Accounts extends Controller
{
	
	function index()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$user = new User();
 		$crm_id = Auth::getCrm_id();
 		
 		$limit = 10;
 		$pager = new Pager($limit);
 		$offset = $pager->offset;

 		$query = "select * from users where crm_id = :crm_id && rank in ('account') order by id desc limit $limit offset $offset";
 		$arr['crm_id'] = $crm_id;

 		if(isset($_GET['find']))
 		{
 			$find = '%' . $_GET['find'] . '%';
 			$query = "select * from users where crm_id = :crm_id && rank in ('account') && (firstname like :find || lastname like :find) order by id desc limit $limit offset $offset";
 			$arr['find'] = $find;
 		}

		$data = $user->query($query,$arr);

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['accounts','accounts'];

		if(Auth::access('reception')){
			$this->view('accounts',[
				'rows'=>$data,
				'crumbs'=>$crumbs,
				'pager'=>$pager,
			]);
		}else{
			$this->view('access-denied');
		}
	}
}
