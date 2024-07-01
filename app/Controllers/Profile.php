<?php

namespace App\Controllers;

use App\Models\ModelUser;
use CodeIgniter\Controller;

class Profile extends BaseController
{
    public function profile(): string
    {
        return view('dashboard/profile');
    }

    public function tampilData() {
       
    }
}
