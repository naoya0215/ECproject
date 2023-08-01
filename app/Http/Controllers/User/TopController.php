<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;


class TopController extends Controller
{
    public function index(){
        $notices = Notice::all();
        return view('user.top', compact('notices'));
    }
}
