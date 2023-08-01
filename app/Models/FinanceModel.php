<?php

namespace App\Models;

use CodeIgniter\Model;

class FinanceModel extends Model
{
    protected $table = 'finance';
    protected $primaryKey = 'id';
    protected $allowedFields = ['income', 'expense', 'date', 'cash', 'admin_id'];
}
