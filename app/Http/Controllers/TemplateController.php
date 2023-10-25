<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Auth;

class TemplateController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function forgot()
    {
        return view('layouts.forgot');
    }

}
