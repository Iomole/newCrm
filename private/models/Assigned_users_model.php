<?php

/**
 * Assigned_users Model
 */
class Assigned_users_model extends Model
{
    protected $table = 'lead_assignedusers';

	protected $allowedColumns = [
        'user_id',
        'crm_id',
        'lead_id',
        'disabled',
        'date',
    ];

    protected $beforeInsert = [
        'make_crm_id',
    ];

    protected $afterSelect = [
        'get_user',
    ];

    public function make_crm_id($data)
    {
        if(isset($_SESSION['USER']->crm_id)){
            $data['crm_id'] = $_SESSION['USER']->crm_id;
        }
        return $data;
    }

    public function get_user($data)
    {
        
        $user = new User();
        foreach ($data as $key => $row) {
            // code...
            if(isset($row->user_id)){
                $result = $user->where('user_id',$row->user_id);
                $data[$key]->user = is_array($result) ? $result[0] : false;
            }
        }
       
        return $data;
    }

    

 
}