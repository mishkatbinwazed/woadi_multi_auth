<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('users.index');
    }

    public function selectCustomer($id)
    {
    	$user = User::findOrFail($id);

    	$this->data['customers'] = $user->customers->all();

    	return view('users.customers.select_by_user', $this->data);
    }
}
