<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $data = [
            'title'             => 'Users',
            'menuAdminUser'     => 'active',
        ];

        return view('admin.user.index', $data);
    }
}
