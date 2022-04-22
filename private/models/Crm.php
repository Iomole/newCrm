<?php

/**
 * Crm Model
 */
class Crm extends Model
{

	protected $allowedColumns = [
        'crm',
        'date',
    ];

    protected $beforeInsert = [
        'make_crm_id',
        'make_user_id',
    ];

    protected $afterSelect = [
        'get_user',
    ];


    public function validate($DATA)
    {
        $this->errors = array();

        //check for crm name
        if(empty($DATA['crm']) || !preg_match('/^[a-zA-Z ]+$/', $DATA['crm']))
        {
            $this->errors['crm'] = "Only letters & spaces allowed in crm name";
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

    public function make_crm_id($data)
    {
        
        $data['crm_id'] = random_string(60);
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

    

 
}