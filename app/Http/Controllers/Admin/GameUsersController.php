<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameUsersController extends Controller
{
    public function index() {
        return view('admin.game_users.index');
    }
}
