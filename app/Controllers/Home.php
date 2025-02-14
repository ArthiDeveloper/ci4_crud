<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $session = session();
        return view('admin_dashboard');
    }

    public function dashboard(): string
    {
        $session = session();
        return view('user_dashboard',array('title'=>'User Dashboard'));
    }

    public function profile(): string{
    	return view('profile');
    }

    public function invoice(): string{
    	return view('invoice');
    }
}
