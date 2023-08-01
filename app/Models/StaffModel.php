<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff'; // Replace 'match' with the actual table name

    protected $allowedFields = ['staff_name', 'staff_dob', 'position', 'join_date', 'admin_id']; // Add the allowed fields here

    public function getStaff()
    {
        return $this->findAll();
    }

    
}
