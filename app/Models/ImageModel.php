<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image', 'title', 'admin_id'];

    public function getImages()
    {
        return $this->findAll();
    }
}
