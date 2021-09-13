<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*add the admin controller*/
class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
}
