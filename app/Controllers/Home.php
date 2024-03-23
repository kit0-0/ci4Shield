<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $user =\auth()->user();
        echo "Hello {$user->username}<br/>";
        echo "<a href=' ".site_url('logout')." '>Logout</a>";
    }
}
