<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        $data = [
            'title'             => 'Users',
            'subtitle'          => 'Data User',
            'menuAdminUser'     => 'active',
        ];

        return view('admin.user.index', $data);
    }
}
