<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventInfoController extends Controller
{
    public function index() {
        return view('admin.event_info.index');
    }
}
