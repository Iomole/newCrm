<?php

/**
 * Leads Model
 */
class Leads_model extends Model
{
    protected $table = 'leads';

	protected $allowedColumns = [
        'lead',
        'date',
        'salute',
        'firstname',
        'lastname',
        'website',
        'status',
        'source',
        'industry',
        '0_amount',
        'account',
        'l_street',
        'l_city',
        'l_state',
        'l_postcode',
        'l_country',
        'email',
        'phone',
        'description',
    ];

    protected $beforeInsert = [
        'make_crm_id',
        'make_lead_id',
        'make_user_id',
    ];

    protected $afterSelect = [
        'get_user',
    ];


    public function validate($DATA)
    {
        $this->errors = array();

        //check for lead name
        if(empty($DATA['lead']) || !preg_match('/^[a-z A-Z0-9]+$/', $DATA['lead']))
        {
            $this->errors['lead'] = "Only letters & numbers allowed in lead name";
        }
 
        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }

    public function make_crm_id($data)
    {
        if(isset($_SESSION['USER']->crm_id)){
            $data['crm_id'] = $_SESSION['USER']->crm_id;
        }
        return $data;
    }

    public function make_user_id($data)
    {
        if(isset($_SESSION['USER']->user_id)){
            $data['user_id'] = $_SESSION['USER']->user_id;
        }
        return $data;
    }

    public function make_lead_id($data)
    {
        
        $data['lead_id'] = random_string(60);
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