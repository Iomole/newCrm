<?php

/**
 * Account Model
 */
class Account extends Model
{

	protected $allowedColumns = [
        'account',
        'date',
        'website',
        'email',
        'phone',
        'b_address',
        's_address',
        'b_city',
        'b_state',
        'b_pcode',
        'b_country',
        's_city',
        's_sate',
        's_pcode',
        's_country',
        'type',
        'industry',
        'description',
        'assigned_userId',
        'team',
        'account_id',
        'user_id',
        'crm_id',
    ];

    protected $beforeInsert = [
        'make_crm_id',
        'make_user_id',
        'make_account_id',
        'make_assigned_userId',
    ];

    protected $afterSelect = [
        'get_user',
        'get_assignedUser',
        //'get_assignedUserd',
        
    ];


    public function validate($DATA)
    {
        $this->errors = array();

        //check for account name
        if(empty($DATA['account']) || !preg_match('/^[a-zA-Z ]+$/', $DATA['account']))
        {
            $this->errors['account'] = "Only letters & spaces allowed in account name";
        }
 
        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }

    public function make_user_id($data)
    {
        if(isset($_SESSION['USER']->user_id)){
            $data['user_id'] = $_SESSION['USER']->user_id;
        }
        return $data;
    }

    public function make_account_id($data)
    {
        
        $data['account_id'] = random_string(60);
        return $data;
    }



        public function make_crm_id($data)
    {
        
        if(isset($_SESSION['USER']->user_id)){
            $data['crm_id'] = $_SESSION['USER']->crm_id;
        }
        return $data;
    }


     public function make_assigned_userId($data)
    {
        
        if(isset(['USER']->user_id)){
            $data['crm_id'] = $_SESSION['USER']->crm_id;
        }
        return $data;
    }


    public function get_user($data)
    {
        
        $user = new User();
        foreach ($data as $key => $row) {
            // code...
            $result = $user->where('user_id',$row->user_id);
            $data[$key]->user = is_array($result) ? $result[0] : false;

        }
       
        return $data;
    }

 



 public function get_assignedUser($data)
    {
        
        $userd = new User();
        foreach ($data as $key => $row) {
            // code...
            $result = $userd->where('user_id',$row->assigned_userId);
            $data[$key]->userd = is_array($result) ? $result[0] : false;

        }
       
        return $data;
    }



/**public function get_assignedUserd($data)
    {
        
        $userd = new User();
        foreach ($data as $key => $row) {
            // code...
            $result = $userd->where('user_id',$row->data['user_id'] = $_SESSION['USER']->user_id);
            $data[$key]->rows1 = is_array($result) ? $result[0] : false;

        }
       
        return $data;
    }**/



}

