<?php

namespace App\Http\Controllers\backend\Moderator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function index(){
        return view('backend.component.master');
    }
}