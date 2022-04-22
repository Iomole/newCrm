<?php


/**
 * Leads controller
 */
class Leads extends Controller
{
	
	public function index()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$leads = new Leads_model();

		$crm_id = Auth::getCrm_id();
		
		if(Auth::access('admin')){

			$query = "select * from leads where crm_id = :crm_id && year(date) = :school_year order by id desc";
			$arr['crm_id'] = $crm_id;
			$arr['school_year'] = !empty($_SESSION['SCHOOL_YEAR']->year) ? $_SESSION['SCHOOL_YEAR']->year : date("Y",time());

			if(isset($_GET['find']))
	 		{
	 			$find = '%' . $_GET['find'] . '%';
	 			$query = "select * from leads where crm_id = :crm_id && (class like :find) && year(date) = :school_year order by id desc";
	 			$arr['find'] = $find;
	 		}

			$data = $leads->query($query,$arr);
 		}else{

 			$lead = new Leads_model();
 			$mytable = "class_students";
 			if(Auth::getRank() == "lecturer"){
 				$mytable = "class_lecturers";
 			}
 			
			$query = "select * from leads where (lead_id in (select lead_id from $mytable where user_id = :user_id && disabled = 0) && year(date) = :school_year) || user_id = :user_id ";
 			$arr['user_id'] = Auth::getUser_id();
 			$arr['school_year'] = !empty($_SESSION['SCHOOL_YEAR']->year) ? $_SESSION['SCHOOL_YEAR']->year : date("Y",time());

 			if(isset($_GET['find']))
	 		{
	 			$find = '%' . $_GET['find'] . '%';
	 			$query = "select leads.lead, {$mytable}.* from $mytable join classes on classes.class_id = {$mytable}.lead_id where ({$mytable}.user_id = :user_id && {$mytable}.disabled = 0 && classes.class like :find && year(classes.date) = :school_year ) ";
	 			$arr['find'] = $find;
	 		}

 			$data = $class->query($query,$arr);
 
 		}

		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Leads','leads'];

		$this->view('leads',[
			'crumbs'=>$crumbs,
			'rows'=>$data
		]);
	}

	public function add()
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$errors = array();
		if(count($_POST) > 0)
 		{

			$leads = new Leads_model();
			if($leads->validate($_POST))
 			{
 				
 				$_POST['date'] = date("Y-m-d H:i:s");

 				$leads->insert($_POST);
 				$this->redirect('leads');
 			}else
 			{
 				//errors
 				$errors = $leads->errors;
 			}
 		}

 		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Leads','leads'];
		$crumbs[] = ['Add','leads/add'];

		$this->view('leads.add',[
			'errors'=>$errors,
			'crumbs'=>$crumbs,
			
		]);
	}

	public function edit($id = null)
	{
		// code...
		if(!Auth::logged_in())
		{
			$this->redirect('login');
		}

		$classes = new Classes_model();
 		$row = $classes->where('id',$id);

		$errors = array();
		if(count($_POST) > 0 && Auth::access('lecturer') && Auth::i_own_content($row))
 		{

			if($classes->validate($_POST))
 			{
 				
 				$classes->update($id,$_POST);
 				$this->redirect('leads');
 			}else
 			{
 				//errors
 				$errors = $classes->errors;
 			}
 		}


 		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Leads','leads'];
		$crumbs[] = ['Edit','leads/edit'];

		if(Auth::access('lecturer') && Auth::i_own_content($row)){

			$this->view('leads.edit',[
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

 
		$classes = new Classes_model();
 		$row = $classes->where('id',$id);

		$errors = array();

		if(count($_POST) > 0 && Auth::access('lecturer') && Auth::i_own_content($row))
 		{
 
 			$classes->delete($id);
 			$this->redirect('leads');
 		 
 		}


 		$crumbs[] = ['Dashboard',''];
		$crumbs[] = ['Leads','leads'];
		$crumbs[] = ['Delete','leads/delete'];

		if(Auth::access('lecturer') && Auth::i_own_content($row)){

			$this->view('leads.delete',[
				'row'=>$row,
	 			'crumbs'=>$crumbs,
			]);
		}else{
			$this->view('access-denied');
		}
	}
	
}
