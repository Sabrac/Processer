<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebUsersController extends Controller
{
    public function index() {
        return view('admin.web_users.index');
    }
}
