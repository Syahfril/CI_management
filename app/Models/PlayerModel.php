<?php

namespace App\Models;

use CodeIgniter\Model;

class PlayerModel extends Model
{
    protected $table = 'player'; // Replace 'match' with the actual table name

    protected $allowedFields = ['player_name', 'player_dob', 'position', 'join_date', 'contract_duration', 'status', 'admin_id']; // Add the allowed fields here

    public function getPlayer()
    {
        return $this->findAll();
    }

    
}
