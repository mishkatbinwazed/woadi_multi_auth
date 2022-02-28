<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function selectCustomer($id)
    {
    	$user = User::findOrFail($id);

    	$this->data['customers'] = $user->customers->all();

    	return view('admin.customers.select_by_user', $this->data);
    }
}
