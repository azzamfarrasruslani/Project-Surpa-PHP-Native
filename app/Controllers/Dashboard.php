<?php

namespace App\Controllers;

class BaseController
{
    public function dashboard(): string
    {
        return view('dashboard/dashboard');
    }
}
