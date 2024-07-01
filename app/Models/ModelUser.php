<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table = "security";
    protected $primaryKey = 'id_security';
    protected $allowedFields = ['username', 'password', 'nama_security', 'noHp_security'];
}
